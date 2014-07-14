<?php

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World ";
var_dump($text, $binary, $hello);
echo "<br/>";

print "\n";

$trimmed = rtrim($text);
var_dump($trimmed);
echo "<br/>";
$trimmed1= rtrim($binary);
var_dump($trimmed1);
echo "<br/>";
$trimmed2= rtrim($hello);
var_dump($trimmed2);
?>