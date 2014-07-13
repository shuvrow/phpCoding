
<head>
</head>
<body>
<form action="formCreationandSubmitValue.php" method="GET">

ID: <input type="text" name="idText"><br>
Name: <input type="text" name="nameText"><br>
Salary: <input type="text" name="salaryText"><br>
<input type="submit" value="Submit">
</form>
	<?php
require 'officeemployee.php';
//include 'employee.php';
if(isset($_GET['idText']))
		{
			$an_employee = new OfficeEmployee();
			$an_employee->id=$_GET['idText'];
			$an_employee->name=$_GET['nameText'];
			$an_employee->salary=$_GET['salaryText'];
			echo $an_employee->id. ' ' . $an_employee->name. ' '. $an_employee->salary;
			echo "<br/>";
			echo "New salary after increment : ";
			echo $an_employee->get_salary_with_bonus();

		}
	?>
</body>
</html>