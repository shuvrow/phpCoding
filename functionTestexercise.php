<?php
$fields = array
(
	"genres" => array("comedy","tragedy","action","romance"),
	"film-titles"=>array("Big","Star Wars","Titanic","Freanch Kiss"),
	"Stars"=> array("Bill Murray","Mark Hammella", "Leonard Dicaprio",
		"cate Blanchett"),
	);




function collectinformation($key)
{
echo $key ."<br/>";
}


foreach ($fields as $key => $value) {

$a = collectinformation($key);
//echo $value;
print_r($value);
		# code...
}

?>