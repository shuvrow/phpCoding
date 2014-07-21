<html>
	<head>
	</head>
		<body>
			<h3>Add Student</h3>
			<form method="GET">
				Name 	: <input type="text" name="name"></br>
				Reg No 	: <input type="text" name="regNo"></br>
						  <input type="submit" name="submitStudentInfo" value="Add" >
			</form>
				
				<?php
					require_once 'student.php';
					require_once 'department.php';
					//require_once 'show.php';
					session_start();
					if(isset($_GET['name']) && isset($_GET['regNo']) && isset($_GET['submitStudentInfo']))
						{
							$a_student=new Student($_GET['name'],$_GET['regNo']);
							$a_department=$_SESSION['department'];
							echo $a_department->add_student($a_student);

							 $_SESSION['department']=$a_department;
							//$a_student=$_SESSION['student'];

						}
					
				?>
				
		</body>
</hrml>