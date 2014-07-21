<html>
	<head>
	</head>
		<body>
			
				<?php
					require_once 'student.php';
					require_once 'department.php';
					session_start();
					$a_department=$_SESSION['department'];;
					echo $a_department->get_dept_name();
					echo "<br/>";
					echo $a_department->get_dept_code();
					echo "<br/>";
					echo $a_department->get_no_of_students(). '<br/>';
					foreach($a_department->get_all_students() as $a_student)
						{

							echo "Student name: ". $a_student->get_student_name() . "Student Id". $a_student->get_reg_no(). '<br/>';
						}
				?>
		</body>
</hrml>