<?php 
	/**
	* 
	*/
	class MyStatic
	{
		public $name="Ma Ma";
		public static $age=30;

		function __construct()
		{
				
		}

		static function myMethod(){
			
			echo MyStatic::$age;
		}
	}

	$obj=new MyStatic();
	echo $obj->name."<br>";
	echo $obj::myMethod();

?>