<?php
class PluginSimpleopengraph_ModuleTopic_EntityTopic extends PluginSimpleopengraph_Inherit_ModuleTopic_EntityTopic
{
	protected $sFirstImageSOG = null;

	public function getFirstImageSOG()
	{
		return $this->sFirstImageSOG;
	}

	public function setFirstImageSOG($sImage)
	{
		$this->sFirstImageSOG = $sImage;
	}
}
?>