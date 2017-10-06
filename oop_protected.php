<?php
	/**
	 * 
	 */
	 class AccessModifier
	 {
	 	public $one="Public";
	 	private $two="Private";	
	 	protected $three="Protected";

	 	function __construct()
	 	{
	 		# code...
	 	}

	 	function myFunc(){
	 		echo $this->two;
	 		echo "<br>";
	 		echo $this->three;
	 	}
	 } 

	 /**
	 * 
	 */
	 class Biber extends AccessModifier
	 {
	 	
	 	function __construct()
	 	{
	 			
	 	}

	 	function Hello(){
	 		echo $this->three;
	 	}
	 }

	 $obj=new AccessModifier();
	 echo $obj->one;
	 
	 echo "<hr size=10 color=gray>";

	 $obj1=new AccessModifier();
	 echo $obj1->myFunc();

	 echo "<hr size=10 color=gray>";

	 $biber=new Biber();
	 $biber->Hello();
?>