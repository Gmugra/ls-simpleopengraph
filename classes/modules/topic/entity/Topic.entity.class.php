<?php
class PluginSimpleopengraph_ModuleTopic_EntityTopic extends PluginSimpleopengraph_Inherit_ModuleTopic_EntityTopic
{
	protected $sFirstImageSOG = null;
	protected $sTextWitoutHtmlSOG = null;

	public function getFirstImageSOG()
	{
		return $this->sFirstImageSOG;
	}

	public function setFirstImageSOG($sImage)
	{
		$this->sFirstImageSOG = $sImage;
	}

	public function getTextWitoutHtmlSOG()
	{
		return $this->sTextWitoutHtmlSOG;
	}

	public function setTextWitoutHtmlSOG($sText)
	{
		$this->sTextWitoutHtmlSOG = $sText;
	}
}
?>