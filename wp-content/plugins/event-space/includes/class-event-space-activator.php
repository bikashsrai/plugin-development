<?php

/**
 * Fired during plugin activation
 *
 * @link       https://eventspace.com/bikash
 * @since      1.0.0
 *
 * @package    Event_Space
 * @subpackage Event_Space/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Event_Space
 * @subpackage Event_Space/includes
 * @author     Bikash Rai <bikashrai7924@gmail.com>
 */
class Event_Space_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		$plugin_admin = new Event_Space_Admin(EVENT_SPACE_NAME, EVENT_SPACE_VERSION);


	}

}