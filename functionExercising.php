<?php $fields = 
array ( "genres" => 
		array("comedy","Tragedy","action","romance"), 
		"film-titles"=>
		array("Big","Star Wars","Titanic","Freanch Kiss"), 
		"Stars"=> 
		array("Bill Murray","Mark Hammella", "Leonard Dicaprio", "cate Blanchett"), ); 
		
	
		
		function collectinformation($key,$value,$i) 
		{ 
		print_r ($key) ;
		echo ' ';
		
		$lowerCase=strtolower($value[$i]);
		$replacedLowerCase=str_replace(" ","-",$lowerCase);
		print_r($replacedLowerCase);
		echo "<br/>";
		$i++;
		}
		
		
		
		 foreach ($fields as $key => $value)
		{ 
		$i=1;
		$a = collectinformation($key,$value,$i); 
		
		}
		
		?>