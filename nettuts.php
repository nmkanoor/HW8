<?php
class Nettuts {
	function publishNextArticle($editor) {
		var_dump($editor->getEditorName());

		$reflector = new ReflectionClass($editor);
		$editorName = $reflector->getProperty('name');
		$editorName->setAccessible(true);
		$editorName->setValue($editor, 'Mark Twain');
		var_dump($editorName->getValue($editor));
		
		$methodName = 'get EditorName';
		var_dump($editor->$methodName());
	}
}
?>
