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
				
				$source = $oTopic->getTextShort();
				if ($source == null) {
					$source = $oTopic->getText();
				}
				
				$source = str_replace("<cut>", "", $source);
				
				$html = str_get_html($source);
				if (!isset($html) || $html->plaintext == null ) {
					continue;
				}

				$textonly = trim(str_replace(array("\n", "\r"), '', $html->plaintext));
				$textonly = mb_substr($textonly,0,300);
				$oTopic->setTextWitoutHtmlSOG($textonly);

				$aImgs = $html->find('img');
				$sImg = null;
				if (isset($aImgs) ) {
					$oImg = reset($aImgs );
					if (is_object($oImg)) {
						$sImg = $oImg->src;
					}
				}
				if (!isset($sImg) ) {
					$aIframes = $html->find('iframe');
					if (isset($aIframes) ) {
						$oIframe = reset($aIframes );
						if (is_object($oIframe)) {
							$sSrc = $oIframe->src;
							if (stripos($sSrc, 'youtube.com/') !== false) {
								$spos = strrpos($sSrc, '/');
								$qpos = strpos($sSrc, '?');
								$id = null;
								if ($qpos === false) {
									$id = substr($sSrc, $spos + 1);
								} else {
									$id = substr($sSrc, $qpos - $spos);
								}
								$sImg = "https://img.youtube.com/vi/".$id."/0.jpg";	
							}
						}
					}
				}
				if (isset($sImg) ) { 
					$oTopic->setFirstImageSOG($sImg); 
				}
				
				$html->clear();
			}
		}

		return $aTopics;
	}
}
?>