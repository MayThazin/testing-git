<?php 
	/**
	* 
	*/
	class MyStatic
	{
		public static $name="I am static.";

		function __construct()
		{
				
		}
	}

	$obj=new MyStatic();
	echo $obj::$name;
?>