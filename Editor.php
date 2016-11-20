<?php
class Editor {
	private $name;
	public $articleID;
	function __construct($name) {
		$this->name = $name;
	}
	public function setNextArticle($articleID) {
		$this->articleID = $articleId;
	}
	public function publish() {
		echo ("HERE\n");
		return true;
	}
	function getEditorName() {
		return $this->name;
	}
}
?>
