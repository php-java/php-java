<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Resolvers;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\TypeException;
use PHPJava\Kernel\Maps\VerificationTypeTag;
use PHPJava\Kernel\Types\Array_\Collection;
use PHPJava\Kernel\Types\Boolean_;
use PHPJava\Kernel\Types\Byte_;
use PHPJava\Kernel\Types\Char_;
use PHPJava\Kernel\Types\Double_;
use PHPJava\Kernel\Types\Float_;
use PHPJava\Kernel\Types\Int_;
use PHPJava\Kernel\Types\Long_;
use PHPJava\Kernel\Types\PrimitiveValueInterface;
use PHPJava\Kernel\Types\Short_;
use PHPJava\Kernel\Types\Type;
use PHPJava\Kernel\Types\Void_;
use PHPJava\Packages\java\lang\String_;
use PHPJava\Utilities\Formatter;

class TypeResolver
{
    const IS_CLASS = 'IS_CLASS';
    const IS_PRIMITIVE = 'IS_PRIMITIVE';
    const IS_ARRAY = 'IS_ARRAY';

    const PHP_TYPE_MAP = [
        'integer' => 'I',
        'float' => 'F',
        'double' => 'F',
        'string' => 'Ljava.lang.String',
        'boolean' => 'Z',
    ];

    const AMBIGUOUS_TYPES_ON_PHP = [
        Long_::class => Int_::class,
        Double_::class => Float_::class,
        // Char is same as Int on Java, but strict mode cannot decide Int or String on PHPJava.
        // 'char'   => 'int',
        Byte_::class => Int_::class,
        Short_::class => Int_::class,
    ];

    const SIGNATURE_MAP = [
        'B' => Byte_::class,
        'C' => Char_::class,
        'D' => Double_::class,
        'F' => Float_::class,
        'I' => Int_::class,
        'J' => Long_::class,
        'S' => Short_::class,
        'V' => Void_::class,
        'Z' => Boolean_::class,
        'L' => 'class',
    ];

    const TYPES_MAP = [
        'byte' => Byte_::class,
        'char' => Char_::class,
        'double' => Double_::class,
        'float' => Float_::class,
        'int' => Int_::class,
        'long' => Long_::class,
        'short' => Short_::class,
        'boolean' => Boolean_::class,
        'void' => Void_::class,
    ];

    const VERIFICATION_TYPE_TAG_MAPS = [
        Int_::class => VerificationTypeTag::ITEM_Integer,
        Float_::class => VerificationTypeTag::ITEM_Float,
        Double_::class => VerificationTypeTag::ITEM_Double,
        Char_::class => VerificationTypeTag::ITEM_Integer,
        Short_::class => VerificationTypeTag::ITEM_Integer,
        Long_::class => VerificationTypeTag::ITEM_Long,
        null => VerificationTypeTag::ITEM_Null,
    ];

    const PHP_SCALAR_MAP = [
        // [ TypeClass, Instantiation ]
        'float' => [Float_::class, false],
        'double' => [Float_::class, false],
        'integer' => [Int_::class, false],
        'boolean' => [Boolean_::class, false],
    ];

    const PHP_TO_JAVA_MAP = [
        'integer' => Int_::class,
        'string' => String_::class,
        'float' => Double_::class,
        'double' => Double_::class,
    ];

    /**
     * @throws TypeException
     */
    public static function getMappedSignatureType(string $signature): string
    {
        if (isset(static::SIGNATURE_MAP[$signature])) {
            return static::SIGNATURE_MAP[$signature];
        }
        throw new TypeException('Passed undefined signature ' . $signature);
    }

    public static function resolveSignatureByType(string $classType): string
    {
        $signatureMap = array_flip(static::SIGNATURE_MAP);
        $signatureName = $signatureMap[$classType] ?? null;

        if ($signatureName === null) {
            throw new TypeException('Unknown signature: ' . $classType);
        }

        return $signatureName;
    }

    public static function resolve(string $type): string
    {
        $flipped = array_flip(static::SIGNATURE_MAP);
        if (isset($flipped[$type])) {
            if (!(GlobalOptions::get('strict') ?? Runtime::STRICT)) {
                $ambiguousType = static::AMBIGUOUS_TYPES_ON_PHP[$type] ?? $type;
                return $flipped[$ambiguousType] ?? ('L' . $ambiguousType);
            }
            return $flipped[$type];
        }
        return 'L' . $type;
    }

    public static function extractPrimitiveValueFromType(Type $value)
    {
        $extractedValue = (string) $value->getValue();
        if ($value instanceof Int_ || $value instanceof Long_ || $value instanceof Byte_) {
            return (int) $extractedValue;
        }
        if ($value instanceof Float_ || $value instanceof Double_) {
            return (float) $extractedValue;
        }
        if ($value instanceof Boolean_) {
            return $extractedValue === 'true' ? true : false;
        }

        return $extractedValue;
    }

    /**
     * @param array $signatureArray a formatted signature array
     * @throws TypeException
     * @return string[]
     */
    public static function getType(array $signatureArray): array
    {
        $typeName = $type = $signatureArray['type'];
        $signatureType = static::IS_PRIMITIVE;
        if (!static::isPrimitive($type)) {
            $signatureType = static::IS_CLASS;
        }
        if ($signatureArray['dimensions_of_array'] > 0) {
            $signatureType = static::IS_ARRAY;
        }
        if ($typeName === null) {
            throw new TypeException('Unknown type: ' . $type);
        }
        return [
            $signatureType,
            $typeName,
            $signatureArray['dimensions_of_array'],
        ];
    }

    /**
     * @return null|mixed|string
     */
    public static function resolveFromPHPType($value)
    {
        $type = gettype($value);
        $type = static::PHP_TYPE_MAP[$type][0];
        if ($type === 'L') {
            return substr(static::PHP_TYPE_MAP[$type], 1);
        }
        return static::SIGNATURE_MAP[$type] ?? null;
    }

    public static function convertJavaTypeSimplyForPHP(string $type): string
    {
        return static::AMBIGUOUS_TYPES_ON_PHP[$type] ?? $type;
    }

    /**
     * @throws TypeException
     * @return (int|string)[]
     */
    public static function convertPHPtoJava($arguments, string $defaultJavaArgumentType = String_::class): array
    {
        $phpType = gettype($arguments);
        $dimensionsOfArray = 0;
        if ($phpType === 'array') {
            $dimensionsOfArray++;
            $getNestedValues = [];
            foreach ($arguments as $argument) {
                $getNestedValues[] = static::convertPHPtoJava($argument, $defaultJavaArgumentType);
            }
            if (empty($getNestedValues)) {
                $flipped = array_flip(static::PHP_TYPE_MAP);
                $resolveType = static::SIGNATURE_MAP[static::resolve($defaultJavaArgumentType)[0]];
                if (!static::isPrimitive($resolveType)) {
                    return [
                        'type' => $defaultJavaArgumentType,
                        'dimensions_of_array' => $dimensionsOfArray,
                    ];
                }
                return [
                    'type' => $resolveType,
                    'dimensions_of_array' => $dimensionsOfArray,
                ];
            }
            $firstParameter = $getNestedValues[0];

            // TODO: Validate Parameters
            $firstParameter['dimensions_of_array'] += $dimensionsOfArray;
            return $firstParameter;
        }
        if ($phpType === 'object') {
            if ($arguments instanceof JavaClassInterface) {
                return [
                    'type' => Formatter::convertPHPNamespacesToJava(
                        $arguments->getClassName()
                    ),
                    'dimensions_of_array' => $dimensionsOfArray,
                ];
            }
            if ($arguments instanceof PrimitiveValueInterface) {
                return [
                    'type' => get_class($arguments),
                    'dimensions_of_array' => $dimensionsOfArray,
                ];
            }
            if ($arguments instanceof Collection) {
                return [
                    'type' => $arguments->getType($defaultJavaArgumentType),
                    'dimensions_of_array' => $dimensionsOfArray,
                ];
            }
            throw new TypeException(get_class($arguments) . ' does not supported to convert to Java\'s argument.');
        }
        $resolveType = static::SIGNATURE_MAP[static::PHP_TYPE_MAP[$phpType][0]] ?? null;

        if (!static::isPrimitive($resolveType)) {
            return [
                'type' => substr(static::PHP_TYPE_MAP[$phpType], 1),
                'dimensions_of_array' => $dimensionsOfArray,
            ];
        }

        return [
            'type' => $resolveType,
            'dimensions_of_array' => $dimensionsOfArray,
        ];
    }

    /**
     * @throws TypeException
     * @throws \ReflectionException
     */
    public static function compare(JavaClassInterface $javaClass, string $a, string $b): bool
    {
        if ($a === $b) {
            return true;
        }

        $a = static::getExtendedClasses($javaClass, $a);
        $b = static::getExtendedClasses($javaClass, $b);

        $resultClassesComparison = [];
        $resultInterfacesComparison = [];
        for ($i = 0, $size = max(count($a), count($b)); $i < $size; $i++) {
            if (!isset($a[$i], $b[$i])) {
                // No match absolutely.
                return false;
            }

            [$aClasses, $aInterfaces] = $a[$i];
            [$bClasses, $bInterfaces] = $b[$i];

            $resultClassesComparison[] = count(array_intersect($aClasses, $bClasses)) > 0;
            $resultInterfacesComparison[] = count(array_intersect($aInterfaces, $bInterfaces)) > 0;
        }

        return !in_array(false, $resultClassesComparison, true) ||
            !in_array(false, $resultInterfacesComparison, true);
    }

    /**
     * @throws TypeException
     * @throws \ReflectionException
     */
    public static function getExtendedClasses(JavaClassInterface $javaClass, string $class): array
    {
        static $loadedExtendedRoots = [];
        $result = [];
        foreach (Formatter::parseSignature($class) as $signature) {
            if (static::isPrimitive($signature['type'])) {
                $result[] = [[$signature['type']], []];
                continue;
            }

            $javaClass = JavaClass::load($signature['type'], [], false);
            $extendedClasses = $javaClass->getDefinedExtendedClasses();
            $interfaces = $javaClass->getDefinedInterfaceClasses();
            $result[] = $loadedExtendedRoots[$signature['type']] = [$extendedClasses, $interfaces];
        }

        array_walk_recursive($result, function (&$className) {
            $className = Formatter::convertPHPNamespacesToJava((string) $className);
        });

        return $result;
    }

    /**
     * @throws TypeException
     * @return Collection|Type
     */
    public static function convertPHPTypeToJavaType($value)
    {
        $type = gettype($value);
        if ((static::PHP_SCALAR_MAP[$type] ?? null) !== null) {
            /**
             * @var Type $typeClass
             * @var bool $instantiation
             */
            [$typeClass, $instantiation] = static::PHP_SCALAR_MAP[$type];
            if ($instantiation) {
                return new $typeClass($value);
            }
            return $typeClass::get($value);
        }

        switch ($type) {
            case 'string':
                return JavaClass::load('java.lang.String')
                    ->getInvoker()
                    ->construct($value)
                    ->getJavaClass();
            case 'object':
                return $value;
            case 'array':
                $collectionData = [];
                foreach ($value as $item) {
                    $collectionData[] = static::convertPHPTypeToJavaType($item);
                }
                return new Collection($collectionData);
        }
        throw new TypeException('Cannot convert your definition');
    }

    public static function isPrimitive(string $value): bool
    {
        return in_array(
            Formatter::convertStringifiedPrimitiveTypeToKernelType($value),
            array_values(static::TYPES_MAP),
            true
        );
    }

    public static function getVerificationTypeTagByKernelType(string $kernelType): array
    {
        $verificationTypeTag = static::VERIFICATION_TYPE_TAG_MAPS[$kernelType] ?? null;
        if ($verificationTypeTag !== null) {
            return [$verificationTypeTag, null];
        }
        return [VerificationTypeTag::ITEMObject_, $kernelType];
    }
}
