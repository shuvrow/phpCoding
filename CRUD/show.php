<?php
//echo $_POST['batch_name'];
if(isset($_POST['name']))
{
$batch = $_POST['name'];
echo $batch;
/*
mysql_connect('localhost','root','');
mysql_select_db('ftfl_info');
mysql_query("INSERT into student_info(batch) values('$batch')");

*/

	$batch=str_replace(array('(',')','{','}','[',']'), '', $batch);
	if(strlen($batch)== 0)
	{
	trigger_error("your batch can not be empty",E_USER_ERROR); 

	//error_log("your are trying to put empty batch name",3,"temp/error.log");
		}

	elseif(strlen($batch)<4)
	{
		header('Location: add_batch.php?len=short');
		
		//header('Location: http://www.google.com');
		
	}
	elseif(strlen($batch)>7)
	{
		header('Location: add_batch.php?len=long');
		
	}
	else
	{
	mysql_connect('localhost','root','');
	mysql_select_db('ftfl_info');
	echo "inside db loop $batch";
	mysql_query("INSERT into student_info(batch) values('$batch')");
	mysql_query("INSERT into student_info(name) values('bappu','shuvrow','rashed')");
	
	$query=mysql_query("SELECT *from student_info");
	echo "<table border='1'>";
	while ($data = mysql_fetch_object($query))
	{

		echo "<tr>";
		echo "<td>".$data ->batch."</td>";
		echo "<td><a href='view.php?id=".$data->id."'>View</a></td>";
		echo "<td><a href='edit.php?id=".$data->id."'>Edit</a></td>";
		echo "<td><a href='delete.php?id=".$data->id."'>Delete</a></td>";
		echo "</tr>";
	}
echo "</table>";

	}
}
?>