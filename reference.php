<?php
function goodbye(&$greeting) {
	$greeting = "see you later";
}
$myVar = "Hi there";
goodbye( $myVar );
echo $myVar;
?>
