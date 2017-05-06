<?php

class PluginSimpleopengraph_HookSimpleopengraph extends Hook {

	public function RegisterHook() {
		$this->AddHook('template_html_head_begin', 'AddOpenGraph');
	}

	public function AddOpenGraph () {

		return $this->Viewer_Fetch(Plugin::GetTemplatePath('simpleopengraph') . 'opengraph.tpl');
	}

}
?>