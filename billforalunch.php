<html>
<head>
	<title></title>
</head>
	<body>
		<form action="" method="GET">
		Rice: <input type="text" name="amountOfRice"> Unit. (20 tk/unit)<br>
		Vegetable: <input type="text" name="amountOfVegetable"> Unit. (30 tk/unit)<br>
		Fish: <input type="text" name="amountOfFish"> Unit. (80 tk/unit) <br>
		Meat: <input type="text" name="amountOfMeat"> Unit. (120 tk/unit)<br>
		Vat: <input type="text" name="amountOfVat"> % of gross total<br>
		
		<input type="submit" value="Show Bill">
	<?php
	include "billcalculationforalunch.php";
	if(isset($_GET['amountOfRice']))
			{
				$bill_calculate = new Billcalculationforalunch();
				$bill_calculate->riceAmmount=$_GET['amountOfRice'];
				$bill_calculate->vegetableAmount=$_GET['amountOfVegetable'];
				$bill_calculate->fishAmount=$_GET['amountOfFish'];
				$bill_calculate->meatAmount=$_GET['amountOfMeat'];	
				$bill_calculate->vatAmount=$_GET['amountOfVat'];
			
			//echo $bill_calculate->employee_name. ' ' . ', your total salary : ' .$bill_calculate->salary_calculation_of_employee();
				
				echo $bill_calculate->bill_calculation_for_a_lunch(); 
			}	

	?>

	</body>
</html>