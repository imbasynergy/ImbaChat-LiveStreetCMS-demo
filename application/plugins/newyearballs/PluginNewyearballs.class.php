<?php
//===============================================================
if(!class_exists('Plugin')) die('That in the garbage?!');
//===============================================================
class PluginNewyearballs extends Plugin{
//===============================================================
	public function Activate(){
		return true;
	}
//===============================================================
	public function Deactivate(){
		return true;
	}
//===============================================================
	public function Init(){
		$this->Viewer_AppendScript(Plugin::GetTemplateWebPath(__CLASS__).'js/swfobject.min.js');
		$this->Viewer_AppendScript(Plugin::GetTemplateWebPath(__CLASS__).'js/scripts.js');
        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__)."css/style.css");
	}
//===============================================================
}
?>