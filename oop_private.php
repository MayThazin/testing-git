<?php
	/**
	 * 
	 */
	 class AccessModifier
	 {
	 	public $one="Public";
	 	private $two="Private";	
	 	function __construct()
	 	{
	 		# code...
	 	}

	 	function myFunc(){
	 		echo $this->two;
	 	}
	 } 
	 $obj=new AccessModifier();
	 echo $obj->one;
	 
	 echo "<hr size=10 color=gray>";

	 $obj1=new AccessModifier();
	 echo $obj1->myFunc();

?>