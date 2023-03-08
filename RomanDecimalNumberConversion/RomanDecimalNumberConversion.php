<?php
/**
 * Class RomanDecimalNumberConversion
 */
abstract class RomanDecimalNumberConversion
{
    /**
     * @param string $roman
     * @return int
     */
    public static function convertRomanToDecimal(string $roman): int
    {
        $roman = strtoupper($roman);

        $map = [
            'I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000,
            'v' => 4, 'x' => 9, 'l' => 40, 'c' => 90, 'd' => 400, 'm' => 900,
        ];

        $special = [
            'IV' => 'v', 'IX' => 'x', 'XL' => 'l', 'XC' => 'c', 'CD' => 'd', 'CM' => 'm',
        ];

        foreach ($special as $k => $v) {
            $roman = str_replace($k, $v, $roman);
        }

        $number = 0;
        $roman = str_split($roman);
        
        foreach ($roman as $item) {
            $number += $map[$item];
        }

        return $number;
    }
}
