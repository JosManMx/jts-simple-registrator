<?php

/*
  Plugin Name: JTS Simple Registrator
  Plugin URI: https://jostech.com.ve
  Description: Un plugin para registrar usuarios desde el front con el mínimo código posible
  Version: 0.0.1
  Author: Rafael Otero
  Author URI: https://devjrafaelotero.com.ve
  License: GPL2
  Text Domain: jts-simple-registrator
  Domain Path: /languages


  Copyright 2018 Rafael Otero  (email : devjrafaelotero@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Constants
 */
define( "JTS_REGISTRATOR_URI", plugin_dir_path(__FILE__));


/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function myplugin_load_textdomain() {
  load_plugin_textdomain('jts-simple-registrator', false, JTS_REGISTRATOR_URI . '/languages' );
}
add_action( 'init', 'myplugin_load_textdomain' );

// Add Shortcode
include_once( JTS_REGISTRATOR_URI . 'inc/shortcode-simple-registrator.php');

// Registration function
include_once( JTS_REGISTRATOR_URI . 'inc/register-simple-registrator.php');