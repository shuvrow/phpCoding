<?php

		class OfficeEmployee
		{
			public $employee_name;
			public $basic_ammount;
			public $house_rent;
			public $medical_allowance;

				 public function salary_calculation_of_employee()
					 {

					 	$house_rent_calculation=($this->basic_ammount * $this->house_rent)/100;
					 	$medical_allowance_calculation=($this->basic_ammount * $this->medical_allowance)/100;
					 	$total_salary=$this->basic_ammount+$house_rent_calculation+$medical_allowance_calculation;
					 	return $total_salary;

					 }

		}
?>