
<?php

$number = 1234.56;
$english_format_number = number_format($number);
echo $english_format_number;
echo "<br/>";
$nombre_format_francais = number_format($number, 2, ',', ' ');
echo $nombre_format_francais;
//$number = 1234.5678;

$english_format_number = number_format($number, 2, '.', '');
echo "<br/>";
echo $english_format_number;
?>
