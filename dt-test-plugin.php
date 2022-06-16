<?php
 /**
 * @package DT_Test_Plugin
 * @version 1.0
 */
/*
 
Plugin Name: DT Test Plugin
 
Plugin URI: https://developertown.com
 
Description: Plugin for general testing.
 
Version: 1.0
 
Author: Chris Kraft
 
Author URI: https://kriggity.com/
 
License: GPLv2 or later
 
*/
function hello_developertown () {
    return "<h3>Hello Developertown!</h3>";
};
add_shortcode('hello-dt','hello_developertown');