<?php
$returnedvalue;
function getGrade($numberObtained)
{
$number=$numberObtained;
if($number >=80 && $number <=100)
	{
		$returnedvalue='Yahoooooooo.... you acheived  A+';
		
	}
elseif($number >=70 && $number <=79)
	{
		$returnedvalue='Yahoooooooo.... you acheived  A';
	}
elseif($number >=60 && $number <=69)
	{
		$returnedvalue='Yahoooooooo.... you acheived  A-';
		
	}
elseif($number >=50 && $number <=59)
	{
		$returnedvalue='Yahoooooooo.... you acheived  B';
	}

elseif($number >=40 && $number <=49)
	{
		$returnedvalue='Yahoooooooo.... you acheived  C';
		
	}
elseif($number >=33 && $number <=39)
	{
		$returnedvalue='Yahoooooooo.... you acheived  D';
	}
	else
	{
		$returnedvalue='ooooooooh noooo.... you Failed ';
	}
return $returnedvalue;
}


$studentMark=87;
$studentMark1=78;
$studentMark2=37;
$studentMark3=78;
$studentMark4=56;
$studentMark5=35;

$grade=getGrade($studentMark);
echo $grade;
echo "<br/>";
$grade=getGrade($studentMark1);
echo $grade;
echo "<br/>";
$grade=getGrade($studentMark2);
echo $grade;
echo "<br/>";
$grade=getGrade($studentMark3);
echo $grade;
echo "<br/>";
$grade=getGrade($studentMark4);
echo $grade;
echo "<br/>";
$grade=getGrade($studentMark5);
echo $grade;
echo "<br/>";

?>