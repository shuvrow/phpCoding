<html>
<head>
</head>
<body>

<form action="" method="GET">
Employee Name: <input type="text" name="employeeName"><br>
Basic Amount: <input type="text" name="basicAmount"><br>
House Rent: <input type="text" name="houseRent"> % of Basic<br>
Medical Allowance: <input type="text" name="medicalAllowance"> % of Basic<br>
<input type="submit" value="Show Me Salary">
</form>
		<?php
		require 'officeemployee.php';
		if(isset($_GET['employeeName']))
			{
				$an_employee = new OfficeEmployee();
				$an_employee->employee_name=$_GET['employeeName'];
				$an_employee->basic_ammount=$_GET['basicAmount'];
				$an_employee->house_rent=$_GET['houseRent'];
				$an_employee->medical_allowance=$_GET['medicalAllowance'];
			
			echo $an_employee->employee_name. ' ' . ', your total salary : ' .$an_employee->salary_calculation_of_employee();
				

			}	
				//echo "<br/>";

			?>
</body>
</html>