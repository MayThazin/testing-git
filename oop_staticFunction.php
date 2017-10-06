<?php 
	/**
	* 
	*/
	class MyStatic
	{
		public static $name="I am static";

		function __construct()
		{
				
		}

		static function myMethod(){
			echo MyStatic::$name."var from MyStatic class.";
		}
	}

	$obj=new MyStatic();
	echo $obj::$name;
	echo "<br>";

	echo $obj::myMethod();
?>