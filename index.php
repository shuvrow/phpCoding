<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<?php
			require_once 'person.php';
			$a_person=new Person();
			$a_person->first_name='james';
			$a_person->middle_name='locus';
			$a_person->last_name='scott';
			
			echo $a_person->get_full_name();
			echo "<br/>";
			echo $a_person->get_reverse_name();
			
		?>
	</body>
</html>