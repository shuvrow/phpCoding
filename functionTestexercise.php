<?php
$fields = array
(
	"genres" => array("comedy","tragedy","action","romance"),
	"film-titles"=>array("Big","Star Wars","Titanic","Freanch Kiss"),
	"Stars"=> array("Bill Murray","Mark Hammella", "Leonard Dicaprio",
		"cate Blanchett"),
	);

$count=0;


function collectinformation($key,$value,$count)
{
echo $key ."\n";
print_r($value[$count]);
echo "<br/>";
$count++;
}


foreach ($fields as $key => $value) {
//echo "$key";  

$a = collectinformation($key,$value,$count);
}

?>