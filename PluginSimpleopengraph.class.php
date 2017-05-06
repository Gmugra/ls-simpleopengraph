<?php

/* ---------------------------------------------------------------------------
 * Plugin Name: Simple Open Graph
 * Plugin Version: 1.0
 * Author: Gmugra
 * Author URI: https://mmozg.net
 * LiveStreet Version: 1.0.X
 * ----------------------------------------------------------------------------
 *   GNU General Public License, version 2:
 *   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Forbid direct access to the file
 */
if (!class_exists('Plugin')) {
	die('Hacking attempt!');
}

class PluginSimpleopengraph extends Plugin {

	protected $aInherits=array(
		'module' => array('ModuleTopic'),
		'mapper' => array('ModuleTopic_MapperTopic'),
		'entity' => array('ModuleTopic_EntityTopic'),
	);

	//Plugin activation
	public function Activate() {
		return true;
	}	

	//Plugin init
	public function Init() {
	}
}
?>