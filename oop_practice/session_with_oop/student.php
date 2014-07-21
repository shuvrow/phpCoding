<?php
class Student
{
	private $studentName;
	private $regNo;

	public function __construct($name,$regno)
		{
			$this->studentName=$name;
			$this->regNo=$regno;
		}

		
		function get_student_name()
			{

				return $this->studentName;
			}


		function get_reg_no()
			{

				return $this->regNo;
			}


}

?>