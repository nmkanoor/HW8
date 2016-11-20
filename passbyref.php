<?php
function pass_by_value($param) {
	push_array($param, 4, 5);
}
$ar = array(1,2,3);
pass_by_value($ar);
foreach($ar as $elem) {
	print "<br>$elem";
}
/*The program name should be pass by values but I'm not sure how to rename it from terminal*/
?>

