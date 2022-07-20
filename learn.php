<?php 

//change number formats in commas and diferent currency

$number = 6788;
echo number_format($number);

// change number into currency and below fucntion does not support in windows 

// $nnu = "4000";
// $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
// echo $formatter->formatCurrency($number, 'USD');

//chop fucntion removes charactors from a string
$chop = 'hi this is rohan'.'\n';
echo chop($chop, 'an');


?>