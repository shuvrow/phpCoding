<?php
$data="So far so good";

foreach (count_chars($data,1) as $i=>$val)
{
echo "Instance of  \" ".chr($i) ."\" is ".$val;
echo"<br/>";
}
?>