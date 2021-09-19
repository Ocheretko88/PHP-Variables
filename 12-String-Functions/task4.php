<?php
$stringNumbersLetters = '1a2b3c4b5d6e7f8g9h0';
$numbers = ['1','2','3','4','5','6','7','8','9','0'];
$stringLetters = str_replace($numbers, "", $stringNumbersLetters);
echo $stringLetters;
