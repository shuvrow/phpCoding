
<head>
</head>
<body>
<form action="formCreationandSubmitValue.php" method="POST">

ID: <input type="text" name="idText"><br>
Name: <input type="text" name="nameText"><br>
Salary: <input type="text" name="salaryText"><br>
<input type="submit" value="Submit">
</form>
<?php
if(isset($_POST['idText']))
{
$id=$_POST['idText'];
$name=$_POST['nameText'];
$salary=$_POST['salaryText'];
echo $id. ' ' . $name. ' '.$salary;
}
?>
</body>
</html>