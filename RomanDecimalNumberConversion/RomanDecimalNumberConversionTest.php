<?php
/**
 * Class TestRomanDecimalNumberConversion
 */
class RomanDecimalNumberConversionTest extends RomanDecimalNumberConversion
{
    /**
     * @param string $value
     * @param string $converted
     * @return string
     */
    private static function formatData(string $value, string $converted): string
    {
        return "{$value} : {$converted}" . PHP_EOL;
    }

    /**
     * @param string $roman
     */
    public static function convertRomanToDecimalTest(string $roman): void
    {
        echo self::formatData($roman, parent::convertRomanToDecimal($roman));
    }

    /**
     * @param array $romans
     */
    public static function convertRomansToDecimalsTest(array $romans): void
    {
        foreach ($romans as $roman) {
            self::convertRomanToDecimalTest($roman);
        }
    }

    /**
     * @param int $number
     * @throws Exception
     */
    public static function convertDecimalToRomanTest(int $number): void
    {
        echo self::formatData($number, parent::convertDecimalToRoman($number));
    }

    /**
     * @param array $decimals
     */
    public static function convertDecimalsToRomansTest(array $decimals): void
    {
        try {
            foreach ($decimals as $decimal) {
                self::convertDecimalToRomanTest($decimal);
            }
        } catch (Exception $e) {
            echo 'The limit has been exceeded: ',  $e->getMessage(), "\n";
        }
    }
}
