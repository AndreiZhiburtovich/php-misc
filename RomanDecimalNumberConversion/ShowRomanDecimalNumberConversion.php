<?php
/**
 * Class TestRomanDecimalNumberConversion
 */
abstract class ShowRomanDecimalNumberConversion extends RomanDecimalNumberConversion
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
    public static function showConvertRomanToDecimal(string $roman): void
    {
        echo self::formatData($roman, parent::convertRomanToDecimal($roman));
    }

    /**
     * @param array $romans
     */
    public static function showConvertRomansToDecimals(array $romans): void
    {
        foreach ($romans as $roman) {
            self::showConvertRomanToDecimal($roman);
        }
    }
}
