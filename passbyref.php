<?php
$it = 'Larry';
function say_hello(&$thing) {
	echo "Hello, $thing";
	$thing = 'World';
}
say_hello($it);
say_hello($it);
/*The program name should be pass by values but I'm not sure how to rename it from terminal*/
?>

