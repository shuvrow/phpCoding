<html>
	<head>
	</head>
		<body>
			<h3>Add Department</h3>
			<form method="GET">
				Code 	: <input type="text" name="code"></br>
				Name 	: <input type="text" name="name"></br>
						  <input type="submit" name="save" value="Add" >
			</form>
				<?php
					require_once 'department.php';
					//require_once 'show.php';
					session_start();
					if(isset($_GET['code']) && isset($_GET['name']) && isset($_GET['save']))
						{
							$a_department=new Department($_GET['code'],$_GET['name']);
							
							$_SESSION['department']=$a_department;
							
							echo "department added";
						}					
				?>
		</body>
</html>