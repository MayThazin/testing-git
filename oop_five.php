<?php
/**
* 
*/
class One
{
	public $name;
	public $age;

	function __construct()
	{
		# code...
	}

	function myFun(){
		echo "My name is ".$this->name." and Age is ".$this->age.".";
	}
}

$obj=new One();
$obj->name="Shwe Htoo";
$obj->age="30";
$obj->myFun();
echo "<hr size=10 color=red>";

$obj1=new One();
$obj1->name="Po Po";
$obj1->age="29";
$obj1->myFun();
?>