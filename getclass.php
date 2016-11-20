<?php
class foo {
	function name()
	{
		echo "My name is ", get_class($this) , "\n";
	}
}
$bar = new foo();
echo "Its name is " , get_class($bar) , "\n";
$bar->name();

?>

