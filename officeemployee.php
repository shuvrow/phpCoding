<?php
class OfficeEmployee
{
public $id;
public $name;
public $salary;
public $message="error";

	public function get_salary_with_bonus()


	{
		if ($this->salary<=10000 &&  $this->salary >0)
			return $this->salary + $this->salary * .5;
		elseif ( $this->salary>10000 && $this->salary<=30000)
		{
		# code...
		return $this->salary + $this->salary * .3;
	
		}
		elseif ($this->salary>30000){
			return $this->salary + $this->salary * .2;
	
		}
	
		else
		{
			return $this->message;
		}
	}
}
?>