<?php
//creating a new class User
class User
{
var $name="FTFL";
var $email="";

function __construct($name1="FTFL1st ",$email1="shuvrow@gmail.com")
{
$this->name=$name1;
$this->email=$email1;

}



function getName()
{
	return "FRFL1st";
}

}
//instances of User


$user1=new User();


//var_dump($user1);


echo $user1->name;
echo $user1->email;

$user1->getName();
?>