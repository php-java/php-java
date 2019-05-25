<?php
namespace PHPJava\Core\Extended;

use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\DebugTraceIsDisabledException;
use PHPJava\Utilities\Formatter;

trait Debuggable
{
    /**
     * @var mixed[]
     */
    private $debugTraces = [];

    private $debugTool;

    public function appendDebug($log): self
    {
        $this->debugTraces[] = $log;
        return $this;
    }

    public function debug(): void
    {
        $isEnabledTrace = $this->options['operations']['enable_trace'] ?? GlobalOptions::get('operations.enable_trace') ?? Runtime::OPERATIONS_ENABLE_TRACE;
        if (!$isEnabledTrace) {
            throw new DebugTraceIsDisabledException(
                'Debug trace is disabled. If you want to show debug trace then enable to `enable_trace` option.'
            );
        }
        $cpInfo = $this->getConstantPool();
        foreach ($this->debugTraces as $debugTraces) {
            printf("[method]\n");
            printf(Formatter::beatifyMethodFromConstantPool($debugTraces['method'], $this->getConstantPool()) . "\n");
            printf("\n");
            printf("[code]\n");

            $codeCounter = 0;
            printf(
                "%s\n",
                implode(
                    "\n",
                    array_map(
                        function ($codes) use (&$codeCounter, &$debugTraces) {
                            return implode(
                                ' ',
                                array_map(
                                    function ($code) use (&$codeCounter, &$debugTraces) {
                                        $isMnemonic = in_array($codeCounter, $debugTraces['mnemonic_indexes']);
                                        $codeCounter++;
                                        return ($isMnemonic ? "\e[1m\e[35m" : '') . "<0x{$code}>" . ($isMnemonic ? "\e[m" : '');
                                    },
                                    $codes
                                )
                            );
                        },
                        array_chunk(str_split(bin2hex($debugTraces['raw_code']), 2), 20)
                    )
                )
            );
            printf("\n");
            printf("[executed]\n");

            printf(
                "% 8s | %-6.6s | %-20.20s | %-10.10s | %-15.15s\n",
                'PC',
                'OPCODE',
                'MNEMONIC',
                'OPERANDS',
                'LOCAL STORAGE'
            );

            $line = sprintf(
                "%8s+%8s+%22s+%12s+%17s\n",
                '---------',
                '--------',
                '----------------------',
                '------------',
                '-----------------'
            );

            printf($line);

            foreach ($debugTraces['executed'] as [$opcode, $mnemonic, $localStorage, $stacks, $pointer]) {
                printf(
                    "% 8s | 0x%02X   | %-20.20s | %-10.10s | %-15.15s\n",
                    (int) $pointer,
                    $opcode,
                    // Remove prefix
                    ltrim($mnemonic, '_'),
                    count($stacks),
                    count($localStorage)
                );
            }

            printf($line);
            printf("\n");
        }
    }
}
