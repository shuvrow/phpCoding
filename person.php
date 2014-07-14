<?php
class Person{
//fields 
	private $first_name;
	private $middle_name;
	private $last_name;
	public function set_first_name($first_name)
	{
		$this->first_name = $first_name;
	}

	public function set_middle_name($middle_name)
	{
		$this->middle_name = $middle_name;
	}

	public function get_last_name($last_name)
	{
		$this->last_name = $last_name;
	}


	public function get_full_name(){
	return $this->first_name. ' ' . $this->middle_name. ' ' . $this->last_name;
	}
	public function get_reverse_name(){
	$fullString=$this->get_full_name();
	$reverseString=strrev($fullString);
	return $reverseString;
	}

}

?>