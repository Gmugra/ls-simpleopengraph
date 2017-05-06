<?php

if(!class_exists('simple_html_dom_node')) 
{
require_once(Config::Get('path.root.server').'/plugins/simpleopengraph/lib/simple_html_dom.php');
}

class PluginSimpleopengraph_ModuleTopic_MapperTopic extends PluginSimpleopengraph_Inherit_ModuleTopic_MapperTopic
{
	/**
	 * Получить список топиков по списку айдишников
	 *
	 * @param array $aArrayId	Список ID топиков
	 * @return array
	 */
	public function GetTopicsByArrayId($aArrayId) {

		$aTopics = parent::GetTopicsByArrayId($aArrayId);

		if (isset($aTopics)) {
			foreach ($aTopics as $oTopic) {
				$html = str_get_html($oTopic->getTextShort() );
				$aImgs = $html->find('img');
				$sImg = null;
				if (isset($aImgs) ) {
					$oImg = reset($aImgs );
					if (is_object($oImg)) {
						$sImg = $oImg->src;
					}
				}
				if (isset($sImg) ) { 
					$oTopic->setFirstImageSOG($sImg); 
				}
			}
		}

		return $aTopics;
	}
}
?>