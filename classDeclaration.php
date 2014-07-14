<?php
class customerInformation
{
var $id;
var $name;
var $salary;

function __construct($id,$name,$salary)
{
$this->id=$id;
$this->name=$name;
$this->salary=$salary;

}
function showInformation()
{
echo $this->id."<br/>" ;
echo $this->name."<br/>";
echo $this->salary."<br/>";

}
}

$userInfo = new customerInformation("007","james","10000");
$userInfo -> showInformation();


?>