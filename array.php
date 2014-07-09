<?php
$name=array("Md. ","Rashedul ","Hoque ","Bhuiyan");
//echo gettype($name);
print_r($name);
echo "<pre>";
echo "I am " . $name[0] . $name[1] . $name [2] . $name[3];
$name[7]=' Nick name';
$name[]='Shuvrow';
$name[c]=' Another name';
$name[]='Bappu';

print_r ($name);

$fruits=array('a'=>'Appale', 'b'=>'Banana');
$fruits[]='Mengo';
echo "<pre>";
print_r($fruits);


?> 