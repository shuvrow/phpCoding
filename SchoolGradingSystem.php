<?php

$student[1]=78;
$student[2]=93;
$student[3]=24;
if(80 <= $student[2] && 100 >= $student[2])
{
	echo 'A+';
	echo "<br/>";
}


elseif (70 <= $student[2] && 79 >= $student[2])
{
	echo 'A';
	echo "<br/>";
}

elseif(60 <= $student[2] && 69 >= $student[2])
{
	echo 'A-';
	echo "<br/>";
}


elseif(50 <= $student[2] && 59 >= $student[2])
{
	echo 'b';
	echo "<br/>";
}


elseif(40 <= $student[2] && 49 >= $student[2])
{
	echo 'c';
	echo "<br/>";
}


elseif(33 <= $student[2] && 39 >= $student[2])
{
	echo 'd';
	echo "<br/>";
}

elseif(0 <= $student[2] && 32 >= $student[2])
{
	echo 'd';
	echo "<br/>";
}
else
{
echo 'Invalid Number';

}


?>