<?php

$number = 1234.56;

// let's print the international format for the en_US locale
setlocale(LC_MONETARY, 'it_IT');
echo money_format('%i', $number) . "\n";
?>