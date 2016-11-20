<?php
require_once './Editor.php';
require_once './nettuts.php';
class Manager {
	function doJobFor(DateTime $date) {
		if ((new DateTime())->getTimestamp() > $date->getTimeStamp()) {
			$editor = new Editor('John Doe');
			$nettuts = new Nettuts();
			$nettuts->publishNextArticle($editor);
		}
	}
}
?>
