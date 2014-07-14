<html>
	<head>
	</head>
	<body>
		<form action="calculatorapp.php" method="GET">
			First No. :  <input type="text" name="FirstNumber" >
			Second No. :  <input type="text" name="SecondNumber" >
			<br/>
			<input type="submit" value="Addition" name="add">
			<input type="submit" value="Subtraction" name="sub">
			<input type="submit" value="Multiplication" name="mul">
			<input type="submit" value="Division" name="div">
			
			
			<?php
				include 'calculator.php';
				if(isset($_GET['FirstNumber']) && isset($_GET['SecondNumber'] )){
					$a_calculator=new Calculator();
					$a_calculator->first_number=$_GET['FirstNumber'];
					$a_calculator->second_number=$_GET['SecondNumber'];

					$first_Number=$a_calculator->first_number;
					$second_Number=$a_calculator->second_number;
					//echo "<br/>";
					if(isset($_GET['add']))
					{
					echo "Addition : " . $a_calculator->add($first_Number, $second_Number);
					echo "<br/>";
					}
					elseif(isset($_GET['sub']))
					{
					echo "Subtraction : " . $a_calculator->subtruct($first_Number, $second_Number);
					echo "<br/>";
					}
					elseif(isset($_GET['mul']))
					{
					echo "Multiplication : " . $a_calculator->multiply($first_Number, $second_Number);
					echo "<br/>";
					}
					elseif(isset($_GET['div']))
					{
					echo "Division : " . $a_calculator->divide($first_Number, $second_Number);
					}
					}
			?>
	<body>
</html>