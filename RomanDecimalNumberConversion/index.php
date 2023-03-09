<?php

require "RomanDecimalNumberConversion.php";
require "RomanDecimalNumberConversionTest.php";

header("Content-type: text/plain");

RomanDecimalNumberConversionTest::convertRomanToDecimalTest("LXIII");
RomanDecimalNumberConversionTest::convertRomanToDecimalTest("CM");
RomanDecimalNumberConversionTest::convertRomanToDecimalTest("LIV");
RomanDecimalNumberConversionTest::convertRomanToDecimalTest("xl");
RomanDecimalNumberConversionTest::convertRomanToDecimalTest("vii");

echo "---------------" . PHP_EOL;

$romans = ["VI", "LXXX", "XL", "MI", "ix", "ccc", "cm"];
RomanDecimalNumberConversionTest::convertRomansToDecimalsTest($romans);

echo "---------------" . PHP_EOL;

RomanDecimalNumberConversionTest::convertDecimalToRomanTest(1728);

echo "---------------" . PHP_EOL;

$decimals = [123, 12, 456, 128, 64, 1999, 0, 1, 2222, 3999, 4000];
RomanDecimalNumberConversionTest::convertDecimalsToRomansTest($decimals);
