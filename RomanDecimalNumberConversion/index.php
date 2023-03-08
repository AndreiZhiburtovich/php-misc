<?php

require "RomanDecimalNumberConversion.php";
require "ShowRomanDecimalNumberConversion.php";

header("Content-type: text/plain");

// TESTS

ShowRomanDecimalNumberConversion::showConvertRomanToDecimal("LXIII");
ShowRomanDecimalNumberConversion::showConvertRomanToDecimal("CM");
ShowRomanDecimalNumberConversion::showConvertRomanToDecimal("LIV");
ShowRomanDecimalNumberConversion::showConvertRomanToDecimal("xl");
ShowRomanDecimalNumberConversion::showConvertRomanToDecimal("vii");

echo "---------------" . PHP_EOL;

$romans = ["VI", "LXXX", "XL", "MI", "ix", "ccc", "cm"];
ShowRomanDecimalNumberConversion::showConvertRomansToDecimals($romans);
