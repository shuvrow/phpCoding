<?php

$student[1]=78;
$student[2]=93;
$student[3]=24;
if($student[1]>79)
{
	echo "A+";
}

if($student[1]>69)
{
	echo "A";
	break;
}

if($student[1]>59)
{
	echo "A-";
	break;
}

if($student[1]>49)
{
	echo "B";
	break;
}

if($student[1]>39)
{
	echo "C";
	break;
}

if($student[1]>32)
{
	echo "D";
	break;
}
else
{
	echo "Failed";
}
?>