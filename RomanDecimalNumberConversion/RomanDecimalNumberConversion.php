<?php
/**
 * Class RomanDecimalNumberConversion
 */
class RomanDecimalNumberConversion
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
            'v' => 4, 'x' => 9, 'l' => 40, 'c' => 90, 'd' => 400, 'm' => 900
        ];

        $special = [
            'IV' => 'v', 'IX' => 'x', 'XL' => 'l', 'XC' => 'c', 'CD' => 'd', 'CM' => 'm'
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

    /**
     * @param int $number
     * @return string
     * @throws Exception
     */
    public static function convertDecimalToRoman(int $number): string
    {
        $map = [
            0 => "", 1 => "I", 2 => "II", 3 => "III", 4 => "IV",
            5 => "V", 6 => "VI", 7 => "VII", 8 => "VIII", 9 => "IX",
            10 => "X", 20 => "XX", 30 => "XXX", 40 => "XL", 50 => "L",
            60 => "LX", 70 => "LXX", 80 => "LXXX", 90 => "XC",
            100 => "C", 200 => "CC", 300 => "CCC", 400 => "CD", 500 => "D",
            600 => "DC", 700 => "DCC", 800 => "DCCC", 900 => "CM",
            1000 => "M", 2000 => "MM", 3000 => "MMM"
        ];

        if ($number >= 4000) {
            throw new Exception("A number for conversion to romans can't be more than 3999!");
        }

        $number = (string) $number;
        $number = array_reverse(str_split($number));

        $roman = "";
        $depth = 1;

        foreach ($number as $digit) {
            $digit *= $depth;
            $roman = $map[$digit] . $roman;
            $depth *= 10;
        }

        return $roman;
    }
}
