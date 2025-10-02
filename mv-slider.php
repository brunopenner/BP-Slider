<?php 

/**
 * Plugin Name: BP Slider
 * Plugin URI: https://brunopenner.com.au/
 * Description: Slideshow Wordpress plugin based on slick slider
 * Version: 1.0
 * Requires at least: 5.6
 * Author: Bruno Penner
 * Author URI: https://brunopenner.com.au/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: bp-slider
 * Domain Path: /languages
 */

/*
BP Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

BP Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with BP Slider. If not, see {URI to Plugin License}.
*/

//This line is to avoid people from accessing my plugin files directlty, such as the "silence is golden on index.php
if ( ! defined( 'ABSPATH') ) {
    die('Get out of here.')
    exit;
}

/**
 * This allows other developers to overwite this class entirely in the future
 */
if ( !class_exists( 'MV_SLIDER' ) ) {
    class BP_Slider {
        function __construct() {
            
        }
    }
}

/** 
 * Instantiating and calling the constructor
 * this is necessary in objected oriented programming
*/
if( class_exists('BP_Slider')) {
    $bp_slider = new BP_Slider();
}