<?php
$temoraryStorage=0;
$finalOutput=0;
for($countingNumber=0;$countingNumber<10;$countingNumber++)
{
	$temoraryStorage=$countingNumber+$temoraryStorage;
	$finalOutput=$temoraryStorage;
}
echo "Summetion of number 0 to 9 is ".$finalOutput;
?>