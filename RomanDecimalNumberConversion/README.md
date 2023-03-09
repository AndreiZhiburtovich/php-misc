<pre>
<h3>A simple way to convert numbers from roman to decimal and vice versa.</h3>
<b>class RomanDecimalNumberConversion</b>

/**
* @param string $roman
* @return int
*/
public static function convertRomanToDecimal(string $roman): int

/**
* @param int $number
* @return string
* @throws Exception (3999 is a maximum value!)
*/ 
public static function convertDecimalToRoman(int $number): string


<b>TEST RESULTS:</b>

LXIII : 63
CM : 900
LIV : 54
xl : 40
vii : 7

123 : CXXIII
64 : LXIV
1999 : MCMXCIX
0 :
1 : I
2222 : MMCCXXII
3999 : MMMCMXCIX
</pre>
