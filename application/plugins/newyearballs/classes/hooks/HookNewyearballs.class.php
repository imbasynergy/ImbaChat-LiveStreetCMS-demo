<?php//===============================================================class PluginNewyearballs_HookNewyearballs extends Hook{//===============================================================	public function RegisterHook(){		$this->AddHook('template_body_begin','inj_body_begin',__CLASS__);	}//===============================================================	public function inj_body_begin(){		$this->Viewer_Assign('sSWFBallsTemplateWebPath',Plugin::GetTemplateWebPath(__CLASS__).'nyb.swf');		return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'inj_body_begin.tpl');	}//===============================================================}?>