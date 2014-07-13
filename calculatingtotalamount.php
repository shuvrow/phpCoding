<?php
 class Calculatingtotalamount
{
	public $principleAmountOfMoney;
	public $interestRate;
	public $time;
		public function get_total_amount() {
			$totalAmount = ($this->principleAmountOfMoney) + ($this->principleAmountOfMoney * $this->interestRate * $this->time)/100;
			return $totalAmount;
		}
}
?>