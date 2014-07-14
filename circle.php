<?php
class Circle{
	
	public $radius ;

	public function get_area_of_circle() {
	$area=$this->radius * 3.1416 * 3.1416;
	return $area;
	}
}
?>