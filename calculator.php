<?php

class Calculator{
//public $first_number;
//public $second_number;

	public function add($first_number,$second_number){
		$addition=$first_number + $second_number;
		return $addition;
	}

	public function subtruct($first_number,$second_number){
		$subtraction=$first_number - $second_number;
		return $subtraction;
	}

	public function multiply($first_number,$second_number){
		$multiplication=$first_number * $second_number;
		
		return $multiplication;
	}

	public function divide($first_number,$second_number){
		$division=$first_number / $second_number;
		return $division;
	}
}

?>