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
	
	public function getFinalImageSOG()
    {
        $image = null;
		if (Config::Get('plugin.simpleopengraph.use_mainpreview') && class_exists("PluginMainpreview") && $this->getPreviewImageWebPath() != null ) {
			$image = $this->getPreviewImageWebPath();
		} else if ($this->getPhotosetMainPhoto() && $this->getPhotosetMainPhoto()->getWebPath('middle') ) {
			$image = $this->getPhotosetMainPhoto()->getWebPath('middle');
		} else if ($this->sFirstImage != null ) {
			$image = $this->sFirstImage;
		} else if (Config::Get('plugin.simpleopengraph.open_graph_default_image') ) {
			$image = Config::Get('path.root.web').Config::Get('plugin.simpleopengraph.open_graph_default_image');
		}
		return $image;
    }
}
?>