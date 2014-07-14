<html>
	<head>
	</head>
	<body>
		<form action="getredius.php" method="GET">
			Radius of Circle :  <input type="text" name="radiousOfTheCircle" >
			<input type="submit" value="Area">
			
			<?php
				include 'circle.php';
				if(isset($_GET['radiousOfTheCircle'])){
					$a_circle=new Circle();
					$a_circle->radius=$_GET['radiousOfTheCircle'];
					echo "<br/>";
					echo "Area of the Circle is : " . $a_circle->get_area_of_circle();
					}
			?>
	<body>
</html>