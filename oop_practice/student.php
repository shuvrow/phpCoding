<?php 
class Student{
	private $name;
	private $id;
	private $grade;

/* public function __construct() 
	{
		$this->name="Bappu";
		$this->id="08205025";
		$this->grade="Msc(Engg.)";
	echo $this->name . ' ' . $this->id . ' ' . $this->grade;
	
	}

*/
	
	public function set_name($name)
	{
		return $this->name=$name;
		
	}
	public function set_id($id)
	{
		return $this->id=$id;
		 
	}
	public function set_grade($grade)
	{
		return $this->grade=$grade;
		
	}

}

?>