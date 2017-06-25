<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/JoshuaMcKendall/Comicker-Plugin/includes/
 * @since      1.0.0
 *
 * @package    Comicker
 * @subpackage Comicker/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Comicker
 * @subpackage Comciker/includes
 * @author     Joshua McKendall <joshuamckendall@gmail.com>
 */
class Comicker_Activator {

	/**
	 * Short Description.
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$this->create_options();
	}
	
	private function create_options() {
	
	}
	

}
