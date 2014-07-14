<?php
class Billcalculationforalunch{
			public $riceAmmount;
			public $vegetableAmount;
			public $fishAmount;
			public $meatAmount;
			public $vatAmount;

			public function bill_calculation_for_a_lunch()
					 {

					 	$costForRice=$this->riceAmmount * 20;
					 	$costForVegetable=$this->vegetableAmount * 30;
					 	$costForFish=$this->fishAmount * 80;
					 	$costForMeat=$this->meatAmount * 120;
					 	$totalCostWithoutVat=$costForRice+$costForVegetable+$costForFish+$costForMeat;
					 	$totalVat=($this->vatAmount * $totalCostWithoutVat)/100;
					 	$totalCost=$totalCostWithoutVat+$totalVat;
					 	
					 	
					 	return $totalCost;

					 }

}
?>