<?php
class Department
{

private $deptCode;
private $deptName;
//private $maxStudent=2;
private $student_list;

	public function __construct($code,$name)
		{
			$this->deptCode=$code;
			$this->deptName=$name;
			$this->student_list=array();
		}


	public function add_student($a_student)
		{
			$this->student_list[]=$a_student;
			echo 'Student added';

		}


	function get_dept_code()
		{
			return $this->deptCode;
		}


	function get_dept_name()
		{
			return $this->deptName;
		}

	public function get_no_of_students() 
	{
        return count($this->student_list);
    }

    public function get_all_students()
    {
        return $this->student_list;
    }


}

?>