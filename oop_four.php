<?php 
/**
* 
*/
class One
{
	private $name;
	private $age;

	function __construct()
	{
		# code...
	}

	function myFunc(){
		echo $this->name="Mg Mg";
	}
}

$obj=new One();
$obj->myFunc();
?>