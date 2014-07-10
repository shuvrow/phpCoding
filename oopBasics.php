<?php
//creating a new class User
class User
{
var $name="FTFL";
var $email="";
function getName()
{
	return "FRFL2";
}

}
//instances of User
$user1=new User();


//var_dump($user1);


echo $user1->name;
echo $user1->getName();
?>