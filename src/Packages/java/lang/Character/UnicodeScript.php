<?php
namespace PHPJava\Packages\java\lang\Character;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `UnicodeScript` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class UnicodeScript extends Enum /* implements Serializable, Comparable */
{
    /*
     * Unicode script "Adlam".
     */
    const ADLAM = 'ADLAM';

    /*
     * Unicode script "Ahom".
     */
    const AHOM = 'AHOM';

    /*
     * Unicode script "Anatolian Hieroglyphs".
     */
    const ANATOLIAN_HIEROGLYPHS = 'ANATOLIAN_HIEROGLYPHS';

    /*
     * Unicode script "Arabic".
     */
    const ARABIC = 'ARABIC';

    /*
     * Unicode script "Armenian".
     */
    const ARMENIAN = 'ARMENIAN';

    /*
     * Unicode script "Avestan".
     */
    const AVESTAN = 'AVESTAN';

    /*
     * Unicode script "Balinese".
     */
    const BALINESE = 'BALINESE';

    /*
     * Unicode script "Bamum".
     */
    const BAMUM = 'BAMUM';

    /*
     * Unicode script "Bassa Vah".
     */
    const BASSA_VAH = 'BASSA_VAH';

    /*
     * Unicode script "Batak".
     */
    const BATAK = 'BATAK';

    /*
     * Unicode script "Bengali".
     */
    const BENGALI = 'BENGALI';

    /*
     * Unicode script "Bhaiksuki".
     */
    const BHAIKSUKI = 'BHAIKSUKI';

    /*
     * Unicode script "Bopomofo".
     */
    const BOPOMOFO = 'BOPOMOFO';

    /*
     * Unicode script "Brahmi".
     */
    const BRAHMI = 'BRAHMI';

    /*
     * Unicode script "Braille".
     */
    const BRAILLE = 'BRAILLE';

    /*
     * Unicode script "Buginese".
     */
    const BUGINESE = 'BUGINESE';

    /*
     * Unicode script "Buhid".
     */
    const BUHID = 'BUHID';

    /*
     * Unicode script "Canadian_Aboriginal".
     */
    const CANADIAN_ABORIGINAL = 'CANADIAN_ABORIGINAL';

    /*
     * Unicode script "Carian".
     */
    const CARIAN = 'CARIAN';

    /*
     * Unicode script "Caucasian Albanian".
     */
    const CAUCASIAN_ALBANIAN = 'CAUCASIAN_ALBANIAN';

    /*
     * Unicode script "Chakma".
     */
    const CHAKMA = 'CHAKMA';

    /*
     * Unicode script "Cham".
     */
    const CHAM = 'CHAM';

    /*
     * Unicode script "Cherokee".
     */
    const CHEROKEE = 'CHEROKEE';

    /*
     * Unicode script "Common".
     */
    const COMMON = 'COMMON';

    /*
     * Unicode script "Coptic".
     */
    const COPTIC = 'COPTIC';

    /*
     * Unicode script "Cuneiform".
     */
    const CUNEIFORM = 'CUNEIFORM';

    /*
     * Unicode script "Cypriot".
     */
    const CYPRIOT = 'CYPRIOT';

    /*
     * Unicode script "Cyrillic".
     */
    const CYRILLIC = 'CYRILLIC';

    /*
     * Unicode script "Deseret".
     */
    const DESERET = 'DESERET';

    /*
     * Unicode script "Devanagari".
     */
    const DEVANAGARI = 'DEVANAGARI';

    /*
     * Unicode script "Duployan".
     */
    const DUPLOYAN = 'DUPLOYAN';

    /*
     * Unicode script "Egyptian_Hieroglyphs".
     */
    const EGYPTIAN_HIEROGLYPHS = 'EGYPTIAN_HIEROGLYPHS';

    /*
     * Unicode script "Elbasan".
     */
    const ELBASAN = 'ELBASAN';

    /*
     * Unicode script "Ethiopic".
     */
    const ETHIOPIC = 'ETHIOPIC';

    /*
     * Unicode script "Georgian".
     */
    const GEORGIAN = 'GEORGIAN';

    /*
     * Unicode script "Glagolitic".
     */
    const GLAGOLITIC = 'GLAGOLITIC';

    /*
     * Unicode script "Gothic".
     */
    const GOTHIC = 'GOTHIC';

    /*
     * Unicode script "Grantha".
     */
    const GRANTHA = 'GRANTHA';

    /*
     * Unicode script "Greek".
     */
    const GREEK = 'GREEK';

    /*
     * Unicode script "Gujarati".
     */
    const GUJARATI = 'GUJARATI';

    /*
     * Unicode script "Gurmukhi".
     */
    const GURMUKHI = 'GURMUKHI';

    /*
     * Unicode script "Han".
     */
    const HAN = 'HAN';

    /*
     * Unicode script "Hangul".
     */
    const HANGUL = 'HANGUL';

    /*
     * Unicode script "Hanunoo".
     */
    const HANUNOO = 'HANUNOO';

    /*
     * Unicode script "Hatran".
     */
    const HATRAN = 'HATRAN';

    /*
     * Unicode script "Hebrew".
     */
    const HEBREW = 'HEBREW';

    /*
     * Unicode script "Hiragana".
     */
    const HIRAGANA = 'HIRAGANA';

    /*
     * Unicode script "Imperial_Aramaic".
     */
    const IMPERIAL_ARAMAIC = 'IMPERIAL_ARAMAIC';

    /*
     * Unicode script "Inherited".
     */
    const INHERITED = 'INHERITED';

    /*
     * Unicode script "Inscriptional_Pahlavi".
     */
    const INSCRIPTIONAL_PAHLAVI = 'INSCRIPTIONAL_PAHLAVI';

    /*
     * Unicode script "Inscriptional_Parthian".
     */
    const INSCRIPTIONAL_PARTHIAN = 'INSCRIPTIONAL_PARTHIAN';

    /*
     * Unicode script "Javanese".
     */
    const JAVANESE = 'JAVANESE';

    /*
     * Unicode script "Kaithi".
     */
    const KAITHI = 'KAITHI';

    /*
     * Unicode script "Kannada".
     */
    const KANNADA = 'KANNADA';

    /*
     * Unicode script "Katakana".
     */
    const KATAKANA = 'KATAKANA';

    /*
     * Unicode script "Kayah_Li".
     */
    const KAYAH_LI = 'KAYAH_LI';

    /*
     * Unicode script "Kharoshthi".
     */
    const KHAROSHTHI = 'KHAROSHTHI';

    /*
     * Unicode script "Khmer".
     */
    const KHMER = 'KHMER';

    /*
     * Unicode script "Khojki".
     */
    const KHOJKI = 'KHOJKI';

    /*
     * Unicode script "Khudawadi".
     */
    const KHUDAWADI = 'KHUDAWADI';

    /*
     * Unicode script "Lao".
     */
    const LAO = 'LAO';

    /*
     * Unicode script "Latin".
     */
    const LATIN = 'LATIN';

    /*
     * Unicode script "Lepcha".
     */
    const LEPCHA = 'LEPCHA';

    /*
     * Unicode script "Limbu".
     */
    const LIMBU = 'LIMBU';

    /*
     * Unicode script "Linear A".
     */
    const LINEAR_A = 'LINEAR_A';

    /*
     * Unicode script "Linear_B".
     */
    const LINEAR_B = 'LINEAR_B';

    /*
     * Unicode script "Lisu".
     */
    const LISU = 'LISU';

    /*
     * Unicode script "Lycian".
     */
    const LYCIAN = 'LYCIAN';

    /*
     * Unicode script "Lydian".
     */
    const LYDIAN = 'LYDIAN';

    /*
     * Unicode script "Mahajani".
     */
    const MAHAJANI = 'MAHAJANI';

    /*
     * Unicode script "Malayalam".
     */
    const MALAYALAM = 'MALAYALAM';

    /*
     * Unicode script "Mandaic".
     */
    const MANDAIC = 'MANDAIC';

    /*
     * Unicode script "Manichaean".
     */
    const MANICHAEAN = 'MANICHAEAN';

    /*
     * Unicode script "Marchen".
     */
    const MARCHEN = 'MARCHEN';

    /*
     * Unicode script "Masaram Gondi".
     */
    const MASARAM_GONDI = 'MASARAM_GONDI';

    /*
     * Unicode script "Meetei_Mayek".
     */
    const MEETEI_MAYEK = 'MEETEI_MAYEK';

    /*
     * Unicode script "Mende Kikakui".
     */
    const MENDE_KIKAKUI = 'MENDE_KIKAKUI';

    /*
     * Unicode script "Meroitic Cursive".
     */
    const MEROITIC_CURSIVE = 'MEROITIC_CURSIVE';

    /*
     * Unicode script "Meroitic Hieroglyphs".
     */
    const MEROITIC_HIEROGLYPHS = 'MEROITIC_HIEROGLYPHS';

    /*
     * Unicode script "Miao".
     */
    const MIAO = 'MIAO';

    /*
     * Unicode script "Modi".
     */
    const MODI = 'MODI';

    /*
     * Unicode script "Mongolian".
     */
    const MONGOLIAN = 'MONGOLIAN';

    /*
     * Unicode script "Mro".
     */
    const MRO = 'MRO';

    /*
     * Unicode script "Multani".
     */
    const MULTANI = 'MULTANI';

    /*
     * Unicode script "Myanmar".
     */
    const MYANMAR = 'MYANMAR';

    /*
     * Unicode script "Nabataean".
     */
    const NABATAEAN = 'NABATAEAN';

    /*
     * Unicode script "New_Tai_Lue".
     */
    const NEW_TAI_LUE = 'NEW_TAI_LUE';

    /*
     * Unicode script "Newa".
     */
    const NEWA = 'NEWA';

    /*
     * Unicode script "Nko".
     */
    const NKO = 'NKO';

    /*
     * Unicode script "Nushu".
     */
    const NUSHU = 'NUSHU';

    /*
     * Unicode script "Ogham".
     */
    const OGHAM = 'OGHAM';

    /*
     * Unicode script "Ol_Chiki".
     */
    const OL_CHIKI = 'OL_CHIKI';

    /*
     * Unicode script "Old Hungarian".
     */
    const OLD_HUNGARIAN = 'OLD_HUNGARIAN';

    /*
     * Unicode script "Old_Italic".
     */
    const OLD_ITALIC = 'OLD_ITALIC';

    /*
     * Unicode script "Old North Arabian".
     */
    const OLD_NORTH_ARABIAN = 'OLD_NORTH_ARABIAN';

    /*
     * Unicode script "Old Permic".
     */
    const OLD_PERMIC = 'OLD_PERMIC';

    /*
     * Unicode script "Old_Persian".
     */
    const OLD_PERSIAN = 'OLD_PERSIAN';

    /*
     * Unicode script "Old_South_Arabian".
     */
    const OLD_SOUTH_ARABIAN = 'OLD_SOUTH_ARABIAN';

    /*
     * Unicode script "Old_Turkic".
     */
    const OLD_TURKIC = 'OLD_TURKIC';

    /*
     * Unicode script "Oriya".
     */
    const ORIYA = 'ORIYA';

    /*
     * Unicode script "Osage".
     */
    const OSAGE = 'OSAGE';

    /*
     * Unicode script "Osmanya".
     */
    const OSMANYA = 'OSMANYA';

    /*
     * Unicode script "Pahawh Hmong".
     */
    const PAHAWH_HMONG = 'PAHAWH_HMONG';

    /*
     * Unicode script "Palmyrene".
     */
    const PALMYRENE = 'PALMYRENE';

    /*
     * Unicode script "Pau Cin Hau".
     */
    const PAU_CIN_HAU = 'PAU_CIN_HAU';

    /*
     * Unicode script "Phags_Pa".
     */
    const PHAGS_PA = 'PHAGS_PA';

    /*
     * Unicode script "Phoenician".
     */
    const PHOENICIAN = 'PHOENICIAN';

    /*
     * Unicode script "Psalter Pahlavi".
     */
    const PSALTER_PAHLAVI = 'PSALTER_PAHLAVI';

    /*
     * Unicode script "Rejang".
     */
    const REJANG = 'REJANG';

    /*
     * Unicode script "Runic".
     */
    const RUNIC = 'RUNIC';

    /*
     * Unicode script "Samaritan".
     */
    const SAMARITAN = 'SAMARITAN';

    /*
     * Unicode script "Saurashtra".
     */
    const SAURASHTRA = 'SAURASHTRA';

    /*
     * Unicode script "Sharada".
     */
    const SHARADA = 'SHARADA';

    /*
     * Unicode script "Shavian".
     */
    const SHAVIAN = 'SHAVIAN';

    /*
     * Unicode script "Siddham".
     */
    const SIDDHAM = 'SIDDHAM';

    /*
     * Unicode script "SignWriting".
     */
    const SIGNWRITING = 'SIGNWRITING';

    /*
     * Unicode script "Sinhala".
     */
    const SINHALA = 'SINHALA';

    /*
     * Unicode script "Sora Sompeng".
     */
    const SORA_SOMPENG = 'SORA_SOMPENG';

    /*
     * Unicode script "Soyombo".
     */
    const SOYOMBO = 'SOYOMBO';

    /*
     * Unicode script "Sundanese".
     */
    const SUNDANESE = 'SUNDANESE';

    /*
     * Unicode script "Syloti_Nagri".
     */
    const SYLOTI_NAGRI = 'SYLOTI_NAGRI';

    /*
     * Unicode script "Syriac".
     */
    const SYRIAC = 'SYRIAC';

    /*
     * Unicode script "Tagalog".
     */
    const TAGALOG = 'TAGALOG';

    /*
     * Unicode script "Tagbanwa".
     */
    const TAGBANWA = 'TAGBANWA';

    /*
     * Unicode script "Tai_Le".
     */
    const TAI_LE = 'TAI_LE';

    /*
     * Unicode script "Tai_Tham".
     */
    const TAI_THAM = 'TAI_THAM';

    /*
     * Unicode script "Tai_Viet".
     */
    const TAI_VIET = 'TAI_VIET';

    /*
     * Unicode script "Takri".
     */
    const TAKRI = 'TAKRI';

    /*
     * Unicode script "Tamil".
     */
    const TAMIL = 'TAMIL';

    /*
     * Unicode script "Tangut".
     */
    const TANGUT = 'TANGUT';

    /*
     * Unicode script "Telugu".
     */
    const TELUGU = 'TELUGU';

    /*
     * Unicode script "Thaana".
     */
    const THAANA = 'THAANA';

    /*
     * Unicode script "Thai".
     */
    const THAI = 'THAI';

    /*
     * Unicode script "Tibetan".
     */
    const TIBETAN = 'TIBETAN';

    /*
     * Unicode script "Tifinagh".
     */
    const TIFINAGH = 'TIFINAGH';

    /*
     * Unicode script "Tirhuta".
     */
    const TIRHUTA = 'TIRHUTA';

    /*
     * Unicode script "Ugaritic".
     */
    const UGARITIC = 'UGARITIC';

    /*
     * Unicode script "Unknown".
     */
    const UNKNOWN = 'UNKNOWN';

    /*
     * Unicode script "Vai".
     */
    const VAI = 'VAI';

    /*
     * Unicode script "Warang Citi".
     */
    const WARANG_CITI = 'WARANG_CITI';

    /*
     * Unicode script "Yi".
     */
    const YI = 'YI';

    /*
     * Unicode script "Zanabazar Square".
     */
    const ZANABAZAR_SQUARE = 'ZANABAZAR_SQUARE';


    /**
     * Returns the UnicodeScript constant with the given Unicode script name or the script name alias.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#forName
     */
    public static function static_forName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the enum constant representing the Unicode script of which the given character (Unicode code point) is assigned to.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#of
     */
    public static function static_of($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#valueOf
     */
    public static function static_valueOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array containing the constants of this enum type, inthe order they are declared.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#values
     */
    public static function static_values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
