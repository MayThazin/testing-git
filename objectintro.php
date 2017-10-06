<?php 
$object=new stdClass;
$object->name=['John','Billy','Susan'];
foreach ($object->name as $name) {
	echo $name.'<br>';
}
?>