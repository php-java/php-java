<?php
namespace PHPJava\Packages\java\lang\Character;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Character\Subset;

/**
 * The `UnicodeBlock` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\Character\Subset
 */
class UnicodeBlock extends Subset
{
    /**
     * Constant for the "Adlam" Unicode character block.
     *
     * @var mixed $ADLAM
     */
    public static $ADLAM = null;

    /**
     * Constant for the "Aegean Numbers" Unicode character block.
     *
     * @var mixed $AEGEAN_NUMBERS
     */
    public static $AEGEAN_NUMBERS = null;

    /**
     * Constant for the "Ahom" Unicode character block.
     *
     * @var mixed $AHOM
     */
    public static $AHOM = null;

    /**
     * Constant for the "Alchemical Symbols" Unicode character block.
     *
     * @var mixed $ALCHEMICAL_SYMBOLS
     */
    public static $ALCHEMICAL_SYMBOLS = null;

    /**
     * Constant for the "Alphabetic Presentation Forms" Unicode character block.
     *
     * @var mixed $ALPHABETIC_PRESENTATION_FORMS
     */
    public static $ALPHABETIC_PRESENTATION_FORMS = null;

    /**
     * Constant for the "Anatolian Hieroglyphs" Unicode character block.
     *
     * @var mixed $ANATOLIAN_HIEROGLYPHS
     */
    public static $ANATOLIAN_HIEROGLYPHS = null;

    /**
     * Constant for the "Ancient Greek Musical Notation" Unicode character block.
     *
     * @var mixed $ANCIENT_GREEK_MUSICAL_NOTATION
     */
    public static $ANCIENT_GREEK_MUSICAL_NOTATION = null;

    /**
     * Constant for the "Ancient Greek Numbers" Unicode character block.
     *
     * @var mixed $ANCIENT_GREEK_NUMBERS
     */
    public static $ANCIENT_GREEK_NUMBERS = null;

    /**
     * Constant for the "Ancient Symbols" Unicode character block.
     *
     * @var mixed $ANCIENT_SYMBOLS
     */
    public static $ANCIENT_SYMBOLS = null;

    /**
     * Constant for the "Arabic" Unicode character block.
     *
     * @var mixed $ARABIC
     */
    public static $ARABIC = null;

    /**
     * Constant for the "Arabic Extended-A" Unicode character block.
     *
     * @var mixed $ARABIC_EXTENDED_A
     */
    public static $ARABIC_EXTENDED_A = null;

    /**
     * Constant for the "Arabic Mathematical Alphabetic Symbols" Unicode character block.
     *
     * @var mixed $ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS
     */
    public static $ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS = null;

    /**
     * Constant for the "Arabic Presentation Forms-A" Unicode character block.
     *
     * @var mixed $ARABIC_PRESENTATION_FORMS_A
     */
    public static $ARABIC_PRESENTATION_FORMS_A = null;

    /**
     * Constant for the "Arabic Presentation Forms-B" Unicode character block.
     *
     * @var mixed $ARABIC_PRESENTATION_FORMS_B
     */
    public static $ARABIC_PRESENTATION_FORMS_B = null;

    /**
     * Constant for the "Arabic Supplement" Unicode character block.
     *
     * @var mixed $ARABIC_SUPPLEMENT
     */
    public static $ARABIC_SUPPLEMENT = null;

    /**
     * Constant for the "Armenian" Unicode character block.
     *
     * @var mixed $ARMENIAN
     */
    public static $ARMENIAN = null;

    /**
     * Constant for the "Arrows" Unicode character block.
     *
     * @var mixed $ARROWS
     */
    public static $ARROWS = null;

    /**
     * Constant for the "Avestan" Unicode character block.
     *
     * @var mixed $AVESTAN
     */
    public static $AVESTAN = null;

    /**
     * Constant for the "Balinese" Unicode character block.
     *
     * @var mixed $BALINESE
     */
    public static $BALINESE = null;

    /**
     * Constant for the "Bamum" Unicode character block.
     *
     * @var mixed $BAMUM
     */
    public static $BAMUM = null;

    /**
     * Constant for the "Bamum Supplement" Unicode character block.
     *
     * @var mixed $BAMUM_SUPPLEMENT
     */
    public static $BAMUM_SUPPLEMENT = null;

    /**
     * Constant for the "Basic Latin" Unicode character block.
     *
     * @var mixed $BASIC_LATIN
     */
    public static $BASIC_LATIN = null;

    /**
     * Constant for the "Bassa Vah" Unicode character block.
     *
     * @var mixed $BASSA_VAH
     */
    public static $BASSA_VAH = null;

    /**
     * Constant for the "Batak" Unicode character block.
     *
     * @var mixed $BATAK
     */
    public static $BATAK = null;

    /**
     * Constant for the "Bengali" Unicode character block.
     *
     * @var mixed $BENGALI
     */
    public static $BENGALI = null;

    /**
     * Constant for the "Bhaiksuki" Unicode character block.
     *
     * @var mixed $BHAIKSUKI
     */
    public static $BHAIKSUKI = null;

    /**
     * Constant for the "Block Elements" Unicode character block.
     *
     * @var mixed $BLOCK_ELEMENTS
     */
    public static $BLOCK_ELEMENTS = null;

    /**
     * Constant for the "Bopomofo" Unicode character block.
     *
     * @var mixed $BOPOMOFO
     */
    public static $BOPOMOFO = null;

    /**
     * Constant for the "Bopomofo Extended" Unicode character block.
     *
     * @var mixed $BOPOMOFO_EXTENDED
     */
    public static $BOPOMOFO_EXTENDED = null;

    /**
     * Constant for the "Box Drawing" Unicode character block.
     *
     * @var mixed $BOX_DRAWING
     */
    public static $BOX_DRAWING = null;

    /**
     * Constant for the "Brahmi" Unicode character block.
     *
     * @var mixed $BRAHMI
     */
    public static $BRAHMI = null;

    /**
     * Constant for the "Braille Patterns" Unicode character block.
     *
     * @var mixed $BRAILLE_PATTERNS
     */
    public static $BRAILLE_PATTERNS = null;

    /**
     * Constant for the "Buginese" Unicode character block.
     *
     * @var mixed $BUGINESE
     */
    public static $BUGINESE = null;

    /**
     * Constant for the "Buhid" Unicode character block.
     *
     * @var mixed $BUHID
     */
    public static $BUHID = null;

    /**
     * Constant for the "Byzantine Musical Symbols" Unicode character block.
     *
     * @var mixed $BYZANTINE_MUSICAL_SYMBOLS
     */
    public static $BYZANTINE_MUSICAL_SYMBOLS = null;

    /**
     * Constant for the "Carian" Unicode character block.
     *
     * @var mixed $CARIAN
     */
    public static $CARIAN = null;

    /**
     * Constant for the "Caucasian Albanian" Unicode character block.
     *
     * @var mixed $CAUCASIAN_ALBANIAN
     */
    public static $CAUCASIAN_ALBANIAN = null;

    /**
     * Constant for the "Chakma" Unicode character block.
     *
     * @var mixed $CHAKMA
     */
    public static $CHAKMA = null;

    /**
     * Constant for the "Cham" Unicode character block.
     *
     * @var mixed $CHAM
     */
    public static $CHAM = null;

    /**
     * Constant for the "Cherokee" Unicode character block.
     *
     * @var mixed $CHEROKEE
     */
    public static $CHEROKEE = null;

    /**
     * Constant for the "Cherokee Supplement" Unicode character block.
     *
     * @var mixed $CHEROKEE_SUPPLEMENT
     */
    public static $CHEROKEE_SUPPLEMENT = null;

    /**
     * Constant for the "CJK Compatibility" Unicode character block.
     *
     * @var mixed $CJK_COMPATIBILITY
     */
    public static $CJK_COMPATIBILITY = null;

    /**
     * Constant for the "CJK Compatibility Forms" Unicode character block.
     *
     * @var mixed $CJK_COMPATIBILITY_FORMS
     */
    public static $CJK_COMPATIBILITY_FORMS = null;

    /**
     * Constant for the "CJK Compatibility Ideographs" Unicode character block.
     *
     * @var mixed $CJK_COMPATIBILITY_IDEOGRAPHS
     */
    public static $CJK_COMPATIBILITY_IDEOGRAPHS = null;

    /**
     * Constant for the "CJK Compatibility Ideographs Supplement" Unicode character block.
     *
     * @var mixed $CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT
     */
    public static $CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT = null;

    /**
     * Constant for the "CJK Radicals Supplement" Unicode character block.
     *
     * @var mixed $CJK_RADICALS_SUPPLEMENT
     */
    public static $CJK_RADICALS_SUPPLEMENT = null;

    /**
     * Constant for the "CJK Strokes" Unicode character block.
     *
     * @var mixed $CJK_STROKES
     */
    public static $CJK_STROKES = null;

    /**
     * Constant for the "CJK Symbols and Punctuation" Unicode character block.
     *
     * @var mixed $CJK_SYMBOLS_AND_PUNCTUATION
     */
    public static $CJK_SYMBOLS_AND_PUNCTUATION = null;

    /**
     * Constant for the "CJK Unified Ideographs" Unicode character block.
     *
     * @var mixed $CJK_UNIFIED_IDEOGRAPHS
     */
    public static $CJK_UNIFIED_IDEOGRAPHS = null;

    /**
     * Constant for the "CJK Unified Ideographs Extension A" Unicode character block.
     *
     * @var mixed $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A
     */
    public static $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A = null;

    /**
     * Constant for the "CJK Unified Ideographs Extension B" Unicode character block.
     *
     * @var mixed $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B
     */
    public static $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B = null;

    /**
     * Constant for the "CJK Unified Ideographs Extension C" Unicode character block.
     *
     * @var mixed $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C
     */
    public static $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C = null;

    /**
     * Constant for the "CJK Unified Ideographs Extension D" Unicode character block.
     *
     * @var mixed $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D
     */
    public static $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D = null;

    /**
     * Constant for the "CJK Unified Ideographs Extension E" Unicode character block.
     *
     * @var mixed $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_E
     */
    public static $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_E = null;

    /**
     * Constant for the "CJK Unified Ideographs Extension F" Unicode character block.
     *
     * @var mixed $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_F
     */
    public static $CJK_UNIFIED_IDEOGRAPHS_EXTENSION_F = null;

    /**
     * Constant for the "Combining Diacritical Marks" Unicode character block.
     *
     * @var mixed $COMBINING_DIACRITICAL_MARKS
     */
    public static $COMBINING_DIACRITICAL_MARKS = null;

    /**
     * Constant for the "Combining Diacritical Marks Extended" Unicode character block.
     *
     * @var mixed $COMBINING_DIACRITICAL_MARKS_EXTENDED
     */
    public static $COMBINING_DIACRITICAL_MARKS_EXTENDED = null;

    /**
     * Constant for the "Combining Diacritical Marks Supplement" Unicode character block.
     *
     * @var mixed $COMBINING_DIACRITICAL_MARKS_SUPPLEMENT
     */
    public static $COMBINING_DIACRITICAL_MARKS_SUPPLEMENT = null;

    /**
     * Constant for the "Combining Half Marks" Unicode character block.
     *
     * @var mixed $COMBINING_HALF_MARKS
     */
    public static $COMBINING_HALF_MARKS = null;

    /**
     * Constant for the "Combining Diacritical Marks for Symbols" Unicode character block.
     *
     * @var mixed $COMBINING_MARKS_FOR_SYMBOLS
     */
    public static $COMBINING_MARKS_FOR_SYMBOLS = null;

    /**
     * Constant for the "Common Indic Number Forms" Unicode character block.
     *
     * @var mixed $COMMON_INDIC_NUMBER_FORMS
     */
    public static $COMMON_INDIC_NUMBER_FORMS = null;

    /**
     * Constant for the "Control Pictures" Unicode character block.
     *
     * @var mixed $CONTROL_PICTURES
     */
    public static $CONTROL_PICTURES = null;

    /**
     * Constant for the "Coptic" Unicode character block.
     *
     * @var mixed $COPTIC
     */
    public static $COPTIC = null;

    /**
     * Constant for the "Coptic Epact Numbers" Unicode character block.
     *
     * @var mixed $COPTIC_EPACT_NUMBERS
     */
    public static $COPTIC_EPACT_NUMBERS = null;

    /**
     * Constant for the "Counting Rod Numerals" Unicode character block.
     *
     * @var mixed $COUNTING_ROD_NUMERALS
     */
    public static $COUNTING_ROD_NUMERALS = null;

    /**
     * Constant for the "Cuneiform" Unicode character block.
     *
     * @var mixed $CUNEIFORM
     */
    public static $CUNEIFORM = null;

    /**
     * Constant for the "Cuneiform Numbers and Punctuation" Unicode character block.
     *
     * @var mixed $CUNEIFORM_NUMBERS_AND_PUNCTUATION
     */
    public static $CUNEIFORM_NUMBERS_AND_PUNCTUATION = null;

    /**
     * Constant for the "Currency Symbols" Unicode character block.
     *
     * @var mixed $CURRENCY_SYMBOLS
     */
    public static $CURRENCY_SYMBOLS = null;

    /**
     * Constant for the "Cypriot Syllabary" Unicode character block.
     *
     * @var mixed $CYPRIOT_SYLLABARY
     */
    public static $CYPRIOT_SYLLABARY = null;

    /**
     * Constant for the "Cyrillic" Unicode character block.
     *
     * @var mixed $CYRILLIC
     */
    public static $CYRILLIC = null;

    /**
     * Constant for the "Cyrillic Extended-A" Unicode character block.
     *
     * @var mixed $CYRILLIC_EXTENDED_A
     */
    public static $CYRILLIC_EXTENDED_A = null;

    /**
     * Constant for the "Cyrillic Extended-B" Unicode character block.
     *
     * @var mixed $CYRILLIC_EXTENDED_B
     */
    public static $CYRILLIC_EXTENDED_B = null;

    /**
     * Constant for the "Cyrillic Extended-C" Unicode character block.
     *
     * @var mixed $CYRILLIC_EXTENDED_C
     */
    public static $CYRILLIC_EXTENDED_C = null;

    /**
     * Constant for the "Cyrillic Supplement" Unicode character block.
     *
     * @var mixed $CYRILLIC_SUPPLEMENTARY
     */
    public static $CYRILLIC_SUPPLEMENTARY = null;

    /**
     * Constant for the "Deseret" Unicode character block.
     *
     * @var mixed $DESERET
     */
    public static $DESERET = null;

    /**
     * Constant for the "Devanagari" Unicode character block.
     *
     * @var mixed $DEVANAGARI
     */
    public static $DEVANAGARI = null;

    /**
     * Constant for the "Devanagari Extended" Unicode character block.
     *
     * @var mixed $DEVANAGARI_EXTENDED
     */
    public static $DEVANAGARI_EXTENDED = null;

    /**
     * Constant for the "Dingbats" Unicode character block.
     *
     * @var mixed $DINGBATS
     */
    public static $DINGBATS = null;

    /**
     * Constant for the "Domino Tiles" Unicode character block.
     *
     * @var mixed $DOMINO_TILES
     */
    public static $DOMINO_TILES = null;

    /**
     * Constant for the "Duployan" Unicode character block.
     *
     * @var mixed $DUPLOYAN
     */
    public static $DUPLOYAN = null;

    /**
     * Constant for the "Early Dynastic Cuneiform" Unicode character block.
     *
     * @var mixed $EARLY_DYNASTIC_CUNEIFORM
     */
    public static $EARLY_DYNASTIC_CUNEIFORM = null;

    /**
     * Constant for the "Egyptian Hieroglyphs" Unicode character block.
     *
     * @var mixed $EGYPTIAN_HIEROGLYPHS
     */
    public static $EGYPTIAN_HIEROGLYPHS = null;

    /**
     * Constant for the "Elbasan" Unicode character block.
     *
     * @var mixed $ELBASAN
     */
    public static $ELBASAN = null;

    /**
     * Constant for the "Emoticons" Unicode character block.
     *
     * @var mixed $EMOTICONS
     */
    public static $EMOTICONS = null;

    /**
     * Constant for the "Enclosed Alphanumeric Supplement" Unicode character block.
     *
     * @var mixed $ENCLOSED_ALPHANUMERIC_SUPPLEMENT
     */
    public static $ENCLOSED_ALPHANUMERIC_SUPPLEMENT = null;

    /**
     * Constant for the "Enclosed Alphanumerics" Unicode character block.
     *
     * @var mixed $ENCLOSED_ALPHANUMERICS
     */
    public static $ENCLOSED_ALPHANUMERICS = null;

    /**
     * Constant for the "Enclosed CJK Letters and Months" Unicode character block.
     *
     * @var mixed $ENCLOSED_CJK_LETTERS_AND_MONTHS
     */
    public static $ENCLOSED_CJK_LETTERS_AND_MONTHS = null;

    /**
     * Constant for the "Enclosed Ideographic Supplement" Unicode character block.
     *
     * @var mixed $ENCLOSED_IDEOGRAPHIC_SUPPLEMENT
     */
    public static $ENCLOSED_IDEOGRAPHIC_SUPPLEMENT = null;

    /**
     * Constant for the "Ethiopic" Unicode character block.
     *
     * @var mixed $ETHIOPIC
     */
    public static $ETHIOPIC = null;

    /**
     * Constant for the "Ethiopic Extended" Unicode character block.
     *
     * @var mixed $ETHIOPIC_EXTENDED
     */
    public static $ETHIOPIC_EXTENDED = null;

    /**
     * Constant for the "Ethiopic Extended-A" Unicode character block.
     *
     * @var mixed $ETHIOPIC_EXTENDED_A
     */
    public static $ETHIOPIC_EXTENDED_A = null;

    /**
     * Constant for the "Ethiopic Supplement" Unicode character block.
     *
     * @var mixed $ETHIOPIC_SUPPLEMENT
     */
    public static $ETHIOPIC_SUPPLEMENT = null;

    /**
     * Constant for the "General Punctuation" Unicode character block.
     *
     * @var mixed $GENERAL_PUNCTUATION
     */
    public static $GENERAL_PUNCTUATION = null;

    /**
     * Constant for the "Geometric Shapes" Unicode character block.
     *
     * @var mixed $GEOMETRIC_SHAPES
     */
    public static $GEOMETRIC_SHAPES = null;

    /**
     * Constant for the "Geometric Shapes Extended" Unicode character block.
     *
     * @var mixed $GEOMETRIC_SHAPES_EXTENDED
     */
    public static $GEOMETRIC_SHAPES_EXTENDED = null;

    /**
     * Constant for the "Georgian" Unicode character block.
     *
     * @var mixed $GEORGIAN
     */
    public static $GEORGIAN = null;

    /**
     * Constant for the "Georgian Supplement" Unicode character block.
     *
     * @var mixed $GEORGIAN_SUPPLEMENT
     */
    public static $GEORGIAN_SUPPLEMENT = null;

    /**
     * Constant for the "Glagolitic" Unicode character block.
     *
     * @var mixed $GLAGOLITIC
     */
    public static $GLAGOLITIC = null;

    /**
     * Constant for the "Glagolitic Supplement" Unicode character block.
     *
     * @var mixed $GLAGOLITIC_SUPPLEMENT
     */
    public static $GLAGOLITIC_SUPPLEMENT = null;

    /**
     * Constant for the "Gothic" Unicode character block.
     *
     * @var mixed $GOTHIC
     */
    public static $GOTHIC = null;

    /**
     * Constant for the "Grantha" Unicode character block.
     *
     * @var mixed $GRANTHA
     */
    public static $GRANTHA = null;

    /**
     * Constant for the "Greek and Coptic" Unicode character block.
     *
     * @var mixed $GREEK
     */
    public static $GREEK = null;

    /**
     * Constant for the "Greek Extended" Unicode character block.
     *
     * @var mixed $GREEK_EXTENDED
     */
    public static $GREEK_EXTENDED = null;

    /**
     * Constant for the "Gujarati" Unicode character block.
     *
     * @var mixed $GUJARATI
     */
    public static $GUJARATI = null;

    /**
     * Constant for the "Gurmukhi" Unicode character block.
     *
     * @var mixed $GURMUKHI
     */
    public static $GURMUKHI = null;

    /**
     * Constant for the "Halfwidth and Fullwidth Forms" Unicode character block.
     *
     * @var mixed $HALFWIDTH_AND_FULLWIDTH_FORMS
     */
    public static $HALFWIDTH_AND_FULLWIDTH_FORMS = null;

    /**
     * Constant for the "Hangul Compatibility Jamo" Unicode character block.
     *
     * @var mixed $HANGUL_COMPATIBILITY_JAMO
     */
    public static $HANGUL_COMPATIBILITY_JAMO = null;

    /**
     * Constant for the "Hangul Jamo" Unicode character block.
     *
     * @var mixed $HANGUL_JAMO
     */
    public static $HANGUL_JAMO = null;

    /**
     * Constant for the "Hangul Jamo Extended-A" Unicode character block.
     *
     * @var mixed $HANGUL_JAMO_EXTENDED_A
     */
    public static $HANGUL_JAMO_EXTENDED_A = null;

    /**
     * Constant for the "Hangul Jamo Extended-B" Unicode character block.
     *
     * @var mixed $HANGUL_JAMO_EXTENDED_B
     */
    public static $HANGUL_JAMO_EXTENDED_B = null;

    /**
     * Constant for the "Hangul Syllables" Unicode character block.
     *
     * @var mixed $HANGUL_SYLLABLES
     */
    public static $HANGUL_SYLLABLES = null;

    /**
     * Constant for the "Hanunoo" Unicode character block.
     *
     * @var mixed $HANUNOO
     */
    public static $HANUNOO = null;

    /**
     * Constant for the "Hatran" Unicode character block.
     *
     * @var mixed $HATRAN
     */
    public static $HATRAN = null;

    /**
     * Constant for the "Hebrew" Unicode character block.
     *
     * @var mixed $HEBREW
     */
    public static $HEBREW = null;

    /**
     * Constant for the "High Private Use Surrogates" Unicode character block.
     *
     * @var mixed $HIGH_PRIVATE_USE_SURROGATES
     */
    public static $HIGH_PRIVATE_USE_SURROGATES = null;

    /**
     * Constant for the "High Surrogates" Unicode character block.
     *
     * @var mixed $HIGH_SURROGATES
     */
    public static $HIGH_SURROGATES = null;

    /**
     * Constant for the "Hiragana" Unicode character block.
     *
     * @var mixed $HIRAGANA
     */
    public static $HIRAGANA = null;

    /**
     * Constant for the "Ideographic Description Characters" Unicode character block.
     *
     * @var mixed $IDEOGRAPHIC_DESCRIPTION_CHARACTERS
     */
    public static $IDEOGRAPHIC_DESCRIPTION_CHARACTERS = null;

    /**
     * Constant for the "Ideographic Symbols and Punctuation" Unicode character block.
     *
     * @var mixed $IDEOGRAPHIC_SYMBOLS_AND_PUNCTUATION
     */
    public static $IDEOGRAPHIC_SYMBOLS_AND_PUNCTUATION = null;

    /**
     * Constant for the "Imperial Aramaic" Unicode character block.
     *
     * @var mixed $IMPERIAL_ARAMAIC
     */
    public static $IMPERIAL_ARAMAIC = null;

    /**
     * Constant for the "Inscriptional Pahlavi" Unicode character block.
     *
     * @var mixed $INSCRIPTIONAL_PAHLAVI
     */
    public static $INSCRIPTIONAL_PAHLAVI = null;

    /**
     * Constant for the "Inscriptional Parthian" Unicode character block.
     *
     * @var mixed $INSCRIPTIONAL_PARTHIAN
     */
    public static $INSCRIPTIONAL_PARTHIAN = null;

    /**
     * Constant for the "IPA Extensions" Unicode character block.
     *
     * @var mixed $IPA_EXTENSIONS
     */
    public static $IPA_EXTENSIONS = null;

    /**
     * Constant for the "Javanese" Unicode character block.
     *
     * @var mixed $JAVANESE
     */
    public static $JAVANESE = null;

    /**
     * Constant for the "Kaithi" Unicode character block.
     *
     * @var mixed $KAITHI
     */
    public static $KAITHI = null;

    /**
     * Constant for the "Kana Extended-A" Unicode character block.
     *
     * @var mixed $KANA_EXTENDED_A
     */
    public static $KANA_EXTENDED_A = null;

    /**
     * Constant for the "Kana Supplement" Unicode character block.
     *
     * @var mixed $KANA_SUPPLEMENT
     */
    public static $KANA_SUPPLEMENT = null;

    /**
     * Constant for the "Kanbun" Unicode character block.
     *
     * @var mixed $KANBUN
     */
    public static $KANBUN = null;

    /**
     * Constant for the "Kangxi Radicals" Unicode character block.
     *
     * @var mixed $KANGXI_RADICALS
     */
    public static $KANGXI_RADICALS = null;

    /**
     * Constant for the "Kannada" Unicode character block.
     *
     * @var mixed $KANNADA
     */
    public static $KANNADA = null;

    /**
     * Constant for the "Katakana" Unicode character block.
     *
     * @var mixed $KATAKANA
     */
    public static $KATAKANA = null;

    /**
     * Constant for the "Katakana Phonetic Extensions" Unicode character block.
     *
     * @var mixed $KATAKANA_PHONETIC_EXTENSIONS
     */
    public static $KATAKANA_PHONETIC_EXTENSIONS = null;

    /**
     * Constant for the "Kayah Li" Unicode character block.
     *
     * @var mixed $KAYAH_LI
     */
    public static $KAYAH_LI = null;

    /**
     * Constant for the "Kharoshthi" Unicode character block.
     *
     * @var mixed $KHAROSHTHI
     */
    public static $KHAROSHTHI = null;

    /**
     * Constant for the "Khmer" Unicode character block.
     *
     * @var mixed $KHMER
     */
    public static $KHMER = null;

    /**
     * Constant for the "Khmer Symbols" Unicode character block.
     *
     * @var mixed $KHMER_SYMBOLS
     */
    public static $KHMER_SYMBOLS = null;

    /**
     * Constant for the "Khojki" Unicode character block.
     *
     * @var mixed $KHOJKI
     */
    public static $KHOJKI = null;

    /**
     * Constant for the "Khudawadi" Unicode character block.
     *
     * @var mixed $KHUDAWADI
     */
    public static $KHUDAWADI = null;

    /**
     * Constant for the "Lao" Unicode character block.
     *
     * @var mixed $LAO
     */
    public static $LAO = null;

    /**
     * Constant for the "Latin-1 Supplement" Unicode character block.
     *
     * @var mixed $LATIN_1_SUPPLEMENT
     */
    public static $LATIN_1_SUPPLEMENT = null;

    /**
     * Constant for the "Latin Extended-A" Unicode character block.
     *
     * @var mixed $LATIN_EXTENDED_A
     */
    public static $LATIN_EXTENDED_A = null;

    /**
     * Constant for the "Latin Extended Additional" Unicode character block.
     *
     * @var mixed $LATIN_EXTENDED_ADDITIONAL
     */
    public static $LATIN_EXTENDED_ADDITIONAL = null;

    /**
     * Constant for the "Latin Extended-B" Unicode character block.
     *
     * @var mixed $LATIN_EXTENDED_B
     */
    public static $LATIN_EXTENDED_B = null;

    /**
     * Constant for the "Latin Extended-C" Unicode character block.
     *
     * @var mixed $LATIN_EXTENDED_C
     */
    public static $LATIN_EXTENDED_C = null;

    /**
     * Constant for the "Latin Extended-D" Unicode character block.
     *
     * @var mixed $LATIN_EXTENDED_D
     */
    public static $LATIN_EXTENDED_D = null;

    /**
     * Constant for the "Latin Extended-E" Unicode character block.
     *
     * @var mixed $LATIN_EXTENDED_E
     */
    public static $LATIN_EXTENDED_E = null;

    /**
     * Constant for the "Lepcha" Unicode character block.
     *
     * @var mixed $LEPCHA
     */
    public static $LEPCHA = null;

    /**
     * Constant for the "Letterlike Symbols" Unicode character block.
     *
     * @var mixed $LETTERLIKE_SYMBOLS
     */
    public static $LETTERLIKE_SYMBOLS = null;

    /**
     * Constant for the "Limbu" Unicode character block.
     *
     * @var mixed $LIMBU
     */
    public static $LIMBU = null;

    /**
     * Constant for the "Linear A" Unicode character block.
     *
     * @var mixed $LINEAR_A
     */
    public static $LINEAR_A = null;

    /**
     * Constant for the "Linear B Ideograms" Unicode character block.
     *
     * @var mixed $LINEAR_B_IDEOGRAMS
     */
    public static $LINEAR_B_IDEOGRAMS = null;

    /**
     * Constant for the "Linear B Syllabary" Unicode character block.
     *
     * @var mixed $LINEAR_B_SYLLABARY
     */
    public static $LINEAR_B_SYLLABARY = null;

    /**
     * Constant for the "Lisu" Unicode character block.
     *
     * @var mixed $LISU
     */
    public static $LISU = null;

    /**
     * Constant for the "Low Surrogates" Unicode character block.
     *
     * @var mixed $LOW_SURROGATES
     */
    public static $LOW_SURROGATES = null;

    /**
     * Constant for the "Lycian" Unicode character block.
     *
     * @var mixed $LYCIAN
     */
    public static $LYCIAN = null;

    /**
     * Constant for the "Lydian" Unicode character block.
     *
     * @var mixed $LYDIAN
     */
    public static $LYDIAN = null;

    /**
     * Constant for the "Mahajani" Unicode character block.
     *
     * @var mixed $MAHAJANI
     */
    public static $MAHAJANI = null;

    /**
     * Constant for the "Mahjong Tiles" Unicode character block.
     *
     * @var mixed $MAHJONG_TILES
     */
    public static $MAHJONG_TILES = null;

    /**
     * Constant for the "Malayalam" Unicode character block.
     *
     * @var mixed $MALAYALAM
     */
    public static $MALAYALAM = null;

    /**
     * Constant for the "Mandaic" Unicode character block.
     *
     * @var mixed $MANDAIC
     */
    public static $MANDAIC = null;

    /**
     * Constant for the "Manichaean" Unicode character block.
     *
     * @var mixed $MANICHAEAN
     */
    public static $MANICHAEAN = null;

    /**
     * Constant for the "Marchen" Unicode character block.
     *
     * @var mixed $MARCHEN
     */
    public static $MARCHEN = null;

    /**
     * Constant for the "Masaram Gondi" Unicode character block.
     *
     * @var mixed $MASARAM_GONDI
     */
    public static $MASARAM_GONDI = null;

    /**
     * Constant for the "Mathematical Alphanumeric Symbols" Unicode character block.
     *
     * @var mixed $MATHEMATICAL_ALPHANUMERIC_SYMBOLS
     */
    public static $MATHEMATICAL_ALPHANUMERIC_SYMBOLS = null;

    /**
     * Constant for the "Mathematical Operators" Unicode character block.
     *
     * @var mixed $MATHEMATICAL_OPERATORS
     */
    public static $MATHEMATICAL_OPERATORS = null;

    /**
     * Constant for the "Meetei Mayek" Unicode character block.
     *
     * @var mixed $MEETEI_MAYEK
     */
    public static $MEETEI_MAYEK = null;

    /**
     * Constant for the "Meetei Mayek Extensions" Unicode character block.
     *
     * @var mixed $MEETEI_MAYEK_EXTENSIONS
     */
    public static $MEETEI_MAYEK_EXTENSIONS = null;

    /**
     * Constant for the "Mende Kikakui" Unicode character block.
     *
     * @var mixed $MENDE_KIKAKUI
     */
    public static $MENDE_KIKAKUI = null;

    /**
     * Constant for the "Meroitic Cursive" Unicode character block.
     *
     * @var mixed $MEROITIC_CURSIVE
     */
    public static $MEROITIC_CURSIVE = null;

    /**
     * Constant for the "Meroitic Hieroglyphs" Unicode character block.
     *
     * @var mixed $MEROITIC_HIEROGLYPHS
     */
    public static $MEROITIC_HIEROGLYPHS = null;

    /**
     * Constant for the "Miao" Unicode character block.
     *
     * @var mixed $MIAO
     */
    public static $MIAO = null;

    /**
     * Constant for the "Miscellaneous Mathematical Symbols-A" Unicode character block.
     *
     * @var mixed $MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A
     */
    public static $MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A = null;

    /**
     * Constant for the "Miscellaneous Mathematical Symbols-B" Unicode character block.
     *
     * @var mixed $MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B
     */
    public static $MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B = null;

    /**
     * Constant for the "Miscellaneous Symbols" Unicode character block.
     *
     * @var mixed $MISCELLANEOUS_SYMBOLS
     */
    public static $MISCELLANEOUS_SYMBOLS = null;

    /**
     * Constant for the "Miscellaneous Symbols and Arrows" Unicode character block.
     *
     * @var mixed $MISCELLANEOUS_SYMBOLS_AND_ARROWS
     */
    public static $MISCELLANEOUS_SYMBOLS_AND_ARROWS = null;

    /**
     * Constant for the "Miscellaneous Symbols And Pictographs" Unicode character block.
     *
     * @var mixed $MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS
     */
    public static $MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS = null;

    /**
     * Constant for the "Miscellaneous Technical" Unicode character block.
     *
     * @var mixed $MISCELLANEOUS_TECHNICAL
     */
    public static $MISCELLANEOUS_TECHNICAL = null;

    /**
     * Constant for the "Modi" Unicode character block.
     *
     * @var mixed $MODI
     */
    public static $MODI = null;

    /**
     * Constant for the "Modifier Tone Letters" Unicode character block.
     *
     * @var mixed $MODIFIER_TONE_LETTERS
     */
    public static $MODIFIER_TONE_LETTERS = null;

    /**
     * Constant for the "Mongolian" Unicode character block.
     *
     * @var mixed $MONGOLIAN
     */
    public static $MONGOLIAN = null;

    /**
     * Constant for the "Mongolian Supplement" Unicode character block.
     *
     * @var mixed $MONGOLIAN_SUPPLEMENT
     */
    public static $MONGOLIAN_SUPPLEMENT = null;

    /**
     * Constant for the "Mro" Unicode character block.
     *
     * @var mixed $MRO
     */
    public static $MRO = null;

    /**
     * Constant for the "Multani" Unicode character block.
     *
     * @var mixed $MULTANI
     */
    public static $MULTANI = null;

    /**
     * Constant for the "Musical Symbols" Unicode character block.
     *
     * @var mixed $MUSICAL_SYMBOLS
     */
    public static $MUSICAL_SYMBOLS = null;

    /**
     * Constant for the "Myanmar" Unicode character block.
     *
     * @var mixed $MYANMAR
     */
    public static $MYANMAR = null;

    /**
     * Constant for the "Myanmar Extended-A" Unicode character block.
     *
     * @var mixed $MYANMAR_EXTENDED_A
     */
    public static $MYANMAR_EXTENDED_A = null;

    /**
     * Constant for the "Myanmar Extended-B" Unicode character block.
     *
     * @var mixed $MYANMAR_EXTENDED_B
     */
    public static $MYANMAR_EXTENDED_B = null;

    /**
     * Constant for the "Nabataean" Unicode character block.
     *
     * @var mixed $NABATAEAN
     */
    public static $NABATAEAN = null;

    /**
     * Constant for the "New Tai Lue" Unicode character block.
     *
     * @var mixed $NEW_TAI_LUE
     */
    public static $NEW_TAI_LUE = null;

    /**
     * Constant for the "Newa" Unicode character block.
     *
     * @var mixed $NEWA
     */
    public static $NEWA = null;

    /**
     * Constant for the "NKo" Unicode character block.
     *
     * @var mixed $NKO
     */
    public static $NKO = null;

    /**
     * Constant for the "Number Forms" Unicode character block.
     *
     * @var mixed $NUMBER_FORMS
     */
    public static $NUMBER_FORMS = null;

    /**
     * Constant for the "Nushu" Unicode character block.
     *
     * @var mixed $NUSHU
     */
    public static $NUSHU = null;

    /**
     * Constant for the "Ogham" Unicode character block.
     *
     * @var mixed $OGHAM
     */
    public static $OGHAM = null;

    /**
     * Constant for the "Ol Chiki" Unicode character block.
     *
     * @var mixed $OL_CHIKI
     */
    public static $OL_CHIKI = null;

    /**
     * Constant for the "Old Hungarian" Unicode character block.
     *
     * @var mixed $OLD_HUNGARIAN
     */
    public static $OLD_HUNGARIAN = null;

    /**
     * Constant for the "Old Italic" Unicode character block.
     *
     * @var mixed $OLD_ITALIC
     */
    public static $OLD_ITALIC = null;

    /**
     * Constant for the "Old North Arabian" Unicode character block.
     *
     * @var mixed $OLD_NORTH_ARABIAN
     */
    public static $OLD_NORTH_ARABIAN = null;

    /**
     * Constant for the "Old Permic" Unicode character block.
     *
     * @var mixed $OLD_PERMIC
     */
    public static $OLD_PERMIC = null;

    /**
     * Constant for the "Old Persian" Unicode character block.
     *
     * @var mixed $OLD_PERSIAN
     */
    public static $OLD_PERSIAN = null;

    /**
     * Constant for the "Old South Arabian" Unicode character block.
     *
     * @var mixed $OLD_SOUTH_ARABIAN
     */
    public static $OLD_SOUTH_ARABIAN = null;

    /**
     * Constant for the "Old Turkic" Unicode character block.
     *
     * @var mixed $OLD_TURKIC
     */
    public static $OLD_TURKIC = null;

    /**
     * Constant for the "Optical Character Recognition" Unicode character block.
     *
     * @var mixed $OPTICAL_CHARACTER_RECOGNITION
     */
    public static $OPTICAL_CHARACTER_RECOGNITION = null;

    /**
     * Constant for the "Oriya" Unicode character block.
     *
     * @var mixed $ORIYA
     */
    public static $ORIYA = null;

    /**
     * Constant for the "Ornamental Dingbats" Unicode character block.
     *
     * @var mixed $ORNAMENTAL_DINGBATS
     */
    public static $ORNAMENTAL_DINGBATS = null;

    /**
     * Constant for the "Osage" Unicode character block.
     *
     * @var mixed $OSAGE
     */
    public static $OSAGE = null;

    /**
     * Constant for the "Osmanya" Unicode character block.
     *
     * @var mixed $OSMANYA
     */
    public static $OSMANYA = null;

    /**
     * Constant for the "Pahawh Hmong" Unicode character block.
     *
     * @var mixed $PAHAWH_HMONG
     */
    public static $PAHAWH_HMONG = null;

    /**
     * Constant for the "Palmyrene" Unicode character block.
     *
     * @var mixed $PALMYRENE
     */
    public static $PALMYRENE = null;

    /**
     * Constant for the "Pau Cin Hau" Unicode character block.
     *
     * @var mixed $PAU_CIN_HAU
     */
    public static $PAU_CIN_HAU = null;

    /**
     * Constant for the "Phags-pa" Unicode character block.
     *
     * @var mixed $PHAGS_PA
     */
    public static $PHAGS_PA = null;

    /**
     * Constant for the "Phaistos Disc" Unicode character block.
     *
     * @var mixed $PHAISTOS_DISC
     */
    public static $PHAISTOS_DISC = null;

    /**
     * Constant for the "Phoenician" Unicode character block.
     *
     * @var mixed $PHOENICIAN
     */
    public static $PHOENICIAN = null;

    /**
     * Constant for the "Phonetic Extensions" Unicode character block.
     *
     * @var mixed $PHONETIC_EXTENSIONS
     */
    public static $PHONETIC_EXTENSIONS = null;

    /**
     * Constant for the "Phonetic Extensions Supplement" Unicode character block.
     *
     * @var mixed $PHONETIC_EXTENSIONS_SUPPLEMENT
     */
    public static $PHONETIC_EXTENSIONS_SUPPLEMENT = null;

    /**
     * Constant for the "Playing Cards" Unicode character block.
     *
     * @var mixed $PLAYING_CARDS
     */
    public static $PLAYING_CARDS = null;

    /**
     * Constant for the "Private Use Area" Unicode character block.
     *
     * @var mixed $PRIVATE_USE_AREA
     */
    public static $PRIVATE_USE_AREA = null;

    /**
     * Constant for the "Psalter Pahlavi" Unicode character block.
     *
     * @var mixed $PSALTER_PAHLAVI
     */
    public static $PSALTER_PAHLAVI = null;

    /**
     * Constant for the "Rejang" Unicode character block.
     *
     * @var mixed $REJANG
     */
    public static $REJANG = null;

    /**
     * Constant for the "Rumi Numeral Symbols" Unicode character block.
     *
     * @var mixed $RUMI_NUMERAL_SYMBOLS
     */
    public static $RUMI_NUMERAL_SYMBOLS = null;

    /**
     * Constant for the "Runic" Unicode character block.
     *
     * @var mixed $RUNIC
     */
    public static $RUNIC = null;

    /**
     * Constant for the "Samaritan" Unicode character block.
     *
     * @var mixed $SAMARITAN
     */
    public static $SAMARITAN = null;

    /**
     * Constant for the "Saurashtra" Unicode character block.
     *
     * @var mixed $SAURASHTRA
     */
    public static $SAURASHTRA = null;

    /**
     * Constant for the "Sharada" Unicode character block.
     *
     * @var mixed $SHARADA
     */
    public static $SHARADA = null;

    /**
     * Constant for the "Shavian" Unicode character block.
     *
     * @var mixed $SHAVIAN
     */
    public static $SHAVIAN = null;

    /**
     * Constant for the "Shorthand Format Controls" Unicode character block.
     *
     * @var mixed $SHORTHAND_FORMAT_CONTROLS
     */
    public static $SHORTHAND_FORMAT_CONTROLS = null;

    /**
     * Constant for the "Siddham" Unicode character block.
     *
     * @var mixed $SIDDHAM
     */
    public static $SIDDHAM = null;

    /**
     * Constant for the "Sinhala" Unicode character block.
     *
     * @var mixed $SINHALA
     */
    public static $SINHALA = null;

    /**
     * Constant for the "Sinhala Archaic Numbers" Unicode character block.
     *
     * @var mixed $SINHALA_ARCHAIC_NUMBERS
     */
    public static $SINHALA_ARCHAIC_NUMBERS = null;

    /**
     * Constant for the "Small Form Variants" Unicode character block.
     *
     * @var mixed $SMALL_FORM_VARIANTS
     */
    public static $SMALL_FORM_VARIANTS = null;

    /**
     * Constant for the "Sora Sompeng" Unicode character block.
     *
     * @var mixed $SORA_SOMPENG
     */
    public static $SORA_SOMPENG = null;

    /**
     * Constant for the "Soyombo" Unicode character block.
     *
     * @var mixed $SOYOMBO
     */
    public static $SOYOMBO = null;

    /**
     * Constant for the "Spacing Modifier Letters" Unicode character block.
     *
     * @var mixed $SPACING_MODIFIER_LETTERS
     */
    public static $SPACING_MODIFIER_LETTERS = null;

    /**
     * Constant for the "Specials" Unicode character block.
     *
     * @var mixed $SPECIALS
     */
    public static $SPECIALS = null;

    /**
     * Constant for the "Sundanese" Unicode character block.
     *
     * @var mixed $SUNDANESE
     */
    public static $SUNDANESE = null;

    /**
     * Constant for the "Sundanese Supplement" Unicode character block.
     *
     * @var mixed $SUNDANESE_SUPPLEMENT
     */
    public static $SUNDANESE_SUPPLEMENT = null;

    /**
     * Constant for the "Superscripts and Subscripts" Unicode character block.
     *
     * @var mixed $SUPERSCRIPTS_AND_SUBSCRIPTS
     */
    public static $SUPERSCRIPTS_AND_SUBSCRIPTS = null;

    /**
     * Constant for the "Supplemental Arrows-A" Unicode character block.
     *
     * @var mixed $SUPPLEMENTAL_ARROWS_A
     */
    public static $SUPPLEMENTAL_ARROWS_A = null;

    /**
     * Constant for the "Supplemental Arrows-B" Unicode character block.
     *
     * @var mixed $SUPPLEMENTAL_ARROWS_B
     */
    public static $SUPPLEMENTAL_ARROWS_B = null;

    /**
     * Constant for the "Supplemental Arrows-C" Unicode character block.
     *
     * @var mixed $SUPPLEMENTAL_ARROWS_C
     */
    public static $SUPPLEMENTAL_ARROWS_C = null;

    /**
     * Constant for the "Supplemental Mathematical Operators" Unicode character block.
     *
     * @var mixed $SUPPLEMENTAL_MATHEMATICAL_OPERATORS
     */
    public static $SUPPLEMENTAL_MATHEMATICAL_OPERATORS = null;

    /**
     * Constant for the "Supplemental Punctuation" Unicode character block.
     *
     * @var mixed $SUPPLEMENTAL_PUNCTUATION
     */
    public static $SUPPLEMENTAL_PUNCTUATION = null;

    /**
     * Constant for the "Supplemental Symbols and Pictographs" Unicode character block.
     *
     * @var mixed $SUPPLEMENTAL_SYMBOLS_AND_PICTOGRAPHS
     */
    public static $SUPPLEMENTAL_SYMBOLS_AND_PICTOGRAPHS = null;

    /**
     * Constant for the "Supplementary Private Use Area-A" Unicode character block.
     *
     * @var mixed $SUPPLEMENTARY_PRIVATE_USE_AREA_A
     */
    public static $SUPPLEMENTARY_PRIVATE_USE_AREA_A = null;

    /**
     * Constant for the "Supplementary Private Use Area-B" Unicode character block.
     *
     * @var mixed $SUPPLEMENTARY_PRIVATE_USE_AREA_B
     */
    public static $SUPPLEMENTARY_PRIVATE_USE_AREA_B = null;

    /**
     * Deprecated.Instead of SURROGATES_AREA, use HIGH_SURROGATES, HIGH_PRIVATE_USE_SURROGATES, and LOW_SURROGATES.
     *
     * @var mixed $SURROGATES_AREA
     */
    public static $SURROGATES_AREA = null;

    /**
     * Constant for the "Sutton SignWriting" Unicode character block.
     *
     * @var mixed $SUTTON_SIGNWRITING
     */
    public static $SUTTON_SIGNWRITING = null;

    /**
     * Constant for the "Syloti Nagri" Unicode character block.
     *
     * @var mixed $SYLOTI_NAGRI
     */
    public static $SYLOTI_NAGRI = null;

    /**
     * Constant for the "Syriac" Unicode character block.
     *
     * @var mixed $SYRIAC
     */
    public static $SYRIAC = null;

    /**
     * Constant for the "Syriac Supplement" Unicode character block.
     *
     * @var mixed $SYRIAC_SUPPLEMENT
     */
    public static $SYRIAC_SUPPLEMENT = null;

    /**
     * Constant for the "Tagalog" Unicode character block.
     *
     * @var mixed $TAGALOG
     */
    public static $TAGALOG = null;

    /**
     * Constant for the "Tagbanwa" Unicode character block.
     *
     * @var mixed $TAGBANWA
     */
    public static $TAGBANWA = null;

    /**
     * Constant for the "Tags" Unicode character block.
     *
     * @var mixed $TAGS
     */
    public static $TAGS = null;

    /**
     * Constant for the "Tai Le" Unicode character block.
     *
     * @var mixed $TAI_LE
     */
    public static $TAI_LE = null;

    /**
     * Constant for the "Tai Tham" Unicode character block.
     *
     * @var mixed $TAI_THAM
     */
    public static $TAI_THAM = null;

    /**
     * Constant for the "Tai Viet" Unicode character block.
     *
     * @var mixed $TAI_VIET
     */
    public static $TAI_VIET = null;

    /**
     * Constant for the "Tai Xuan Jing Symbols" Unicode character block.
     *
     * @var mixed $TAI_XUAN_JING_SYMBOLS
     */
    public static $TAI_XUAN_JING_SYMBOLS = null;

    /**
     * Constant for the "Takri" Unicode character block.
     *
     * @var mixed $TAKRI
     */
    public static $TAKRI = null;

    /**
     * Constant for the "Tamil" Unicode character block.
     *
     * @var mixed $TAMIL
     */
    public static $TAMIL = null;

    /**
     * Constant for the "Tangut" Unicode character block.
     *
     * @var mixed $TANGUT
     */
    public static $TANGUT = null;

    /**
     * Constant for the "Tangut Components" Unicode character block.
     *
     * @var mixed $TANGUT_COMPONENTS
     */
    public static $TANGUT_COMPONENTS = null;

    /**
     * Constant for the "Telugu" Unicode character block.
     *
     * @var mixed $TELUGU
     */
    public static $TELUGU = null;

    /**
     * Constant for the "Thaana" Unicode character block.
     *
     * @var mixed $THAANA
     */
    public static $THAANA = null;

    /**
     * Constant for the "Thai" Unicode character block.
     *
     * @var mixed $THAI
     */
    public static $THAI = null;

    /**
     * Constant for the "Tibetan" Unicode character block.
     *
     * @var mixed $TIBETAN
     */
    public static $TIBETAN = null;

    /**
     * Constant for the "Tifinagh" Unicode character block.
     *
     * @var mixed $TIFINAGH
     */
    public static $TIFINAGH = null;

    /**
     * Constant for the "Tirhuta" Unicode character block.
     *
     * @var mixed $TIRHUTA
     */
    public static $TIRHUTA = null;

    /**
     * Constant for the "Transport And Map Symbols" Unicode character block.
     *
     * @var mixed $TRANSPORT_AND_MAP_SYMBOLS
     */
    public static $TRANSPORT_AND_MAP_SYMBOLS = null;

    /**
     * Constant for the "Ugaritic" Unicode character block.
     *
     * @var mixed $UGARITIC
     */
    public static $UGARITIC = null;

    /**
     * Constant for the "Unified Canadian Aboriginal Syllabics" Unicode character block.
     *
     * @var mixed $UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS
     */
    public static $UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS = null;

    /**
     * Constant for the "Unified Canadian Aboriginal Syllabics Extended" Unicode character block.
     *
     * @var mixed $UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED
     */
    public static $UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED = null;

    /**
     * Constant for the "Vai" Unicode character block.
     *
     * @var mixed $VAI
     */
    public static $VAI = null;

    /**
     * Constant for the "Variation Selectors" Unicode character block.
     *
     * @var mixed $VARIATION_SELECTORS
     */
    public static $VARIATION_SELECTORS = null;

    /**
     * Constant for the "Variation Selectors Supplement" Unicode character block.
     *
     * @var mixed $VARIATION_SELECTORS_SUPPLEMENT
     */
    public static $VARIATION_SELECTORS_SUPPLEMENT = null;

    /**
     * Constant for the "Vedic Extensions" Unicode character block.
     *
     * @var mixed $VEDIC_EXTENSIONS
     */
    public static $VEDIC_EXTENSIONS = null;

    /**
     * Constant for the "Vertical Forms" Unicode character block.
     *
     * @var mixed $VERTICAL_FORMS
     */
    public static $VERTICAL_FORMS = null;

    /**
     * Constant for the "Warang Citi" Unicode character block.
     *
     * @var mixed $WARANG_CITI
     */
    public static $WARANG_CITI = null;

    /**
     * Constant for the "Yi Radicals" Unicode character block.
     *
     * @var mixed $YI_RADICALS
     */
    public static $YI_RADICALS = null;

    /**
     * Constant for the "Yi Syllables" Unicode character block.
     *
     * @var mixed $YI_SYLLABLES
     */
    public static $YI_SYLLABLES = null;

    /**
     * Constant for the "Yijing Hexagram Symbols" Unicode character block.
     *
     * @var mixed $YIJING_HEXAGRAM_SYMBOLS
     */
    public static $YIJING_HEXAGRAM_SYMBOLS = null;

    /**
     * Constant for the "Zanabazar Square" Unicode character block.
     *
     * @var mixed $ZANABAZAR_SQUARE
     */
    public static $ZANABAZAR_SQUARE = null;


    /**
     * Returns the UnicodeBlock with the given name.
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
     * Returns the object representing the Unicode block containing the given character, or null if the character is not a member of a defined block.
     * Returns the object representing the Unicode block containing the given character (Unicode code point), or null if the character is not a member of a defined block.
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
}
