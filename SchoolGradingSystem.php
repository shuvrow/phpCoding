<?php

$student[1]=78;
$student2[2]=93;
$student3[3]=24;
if(80 <= $student[1] && 100 >= $student[1])
{
	echo 'A';
	echo "<br/>";
}


elseif (70 <= $student[1] && 79 >= $student[1])
{
	echo 'A';
	echo "<br/>";
}

elseif(60 <= $student[1] && 69 >= $student[1])
{
	echo 'A-';
	echo "<br/>";
}


elseif(50 <= $student[1] && 59 >= $student[1])
{
	echo 'b';
	echo "<br/>";
}


elseif(40 <= $student[1] && 49 >= $student[1])
{
	echo 'c';
	echo "<br/>";
}


elseif(33 <= $student[1] && 39 >= $student[1])
{
	echo 'd';
	echo "<br/>";
}

elseif(0 <= $student[1] && 32 >= $student[1])
{
	echo 'd';
	echo "<br/>";
}
else
{
echo 'Invalid Number';

}


?>