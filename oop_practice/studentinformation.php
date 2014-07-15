<html>
	<head>
	</head>
		<body>
			<form action="studentinformation.php" method="GET">
				Name : <input type="text" name="studentName"><br/>
				Id : <input type="text" name="studentId"><br/>
				Grade :<input type="text" name="studentGrade"><br/>
				<input type="submit" name="valueSubmit" value="View Information">
			</form>
			<?php
			require_once("student.php");
			//echo "test1";
				
				if(isset($_GET['studentName']) && isset($_GET['studentId']) && isset($_GET['studentGrade']))
					{
					$a_studentobj=new Student;
					
						if($_GET['studentName'])
						{
						$student_name=$a_studentobj->set_name($_GET['studentName']);
						echo "Student name is: "."$student_name";
						echo "<br/>";
						}
						
						if($_GET['studentId'])
						{
						$student_id=$a_studentobj->set_id($_GET['studentId']);
						echo "Student id is: "."$student_id";
						echo "<br/>";
						}
						
						if($_GET['studentGrade'])
						{
						$student_grade=$a_studentobj->set_grade($_GET['studentGrade']);
						echo "Student is now in : "."$student_grade"." grade";
						echo "<br/>";
						}
					}
					
			?>
		</body>
</html>