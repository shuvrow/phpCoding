<?php
$fields = array
(
	"genres" => array("comedy","tragedy","action","romance"),
	"film-titles"=>array("Big","Star Wars","Titanic","Freanch Kiss"),
	"Stars"=> array("Bill Murray","Mark Hammella", "Leonard Dicaprio",
		"cate Blanchett"),
	);




function collectinformation($key,$value,$i)
{
echo $key ."<br/>";
print_r($value[$i])."<br/>";
$i++;
}


foreach ($fields as $key => $value) {
//echo "$key";
$i=1;
$a = collectinformation($key,$value,$i);
}

?>