<?php
	/**
	 * 
	 */
	 class AccessModifier
	 {
	 	public $one="Public";

	 	function __construct()
	 	{
	 		# code...
	 	}
	 } 
	 $obj=new AccessModifier();
	 echo $obj->one;
?>