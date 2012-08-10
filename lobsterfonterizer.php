<?php

/*
Plugin Name: Lobsterfonterizer
Plugin URI: http://iamrobertv.com
Description: This plugin does all the hard work of choosings fonts for you. It just uses Lobster for everything.
Version: 0.5
Author: Roberto Villarreal
Author URI: http://iamrobertv.com
License: WTFPL
*/

/*
DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
Version 3.Robert (Because I Can), August 2012

Copyright (C) 2012 Roberto Villarreal <robertv@me.com> 

Everyone is permitted to copy and distribute verbatim or modified 
copies of this license document, and changing it is allowed as long 
as the name is changed. 

DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION 

0. You just DO WHAT THE FUCK YOU WANT TO. 
*/


// Do the damn thing.

function lobsterfonterizer () {

	wp_enqueue_style('lobsterfonterizer', plugin_dir_url( __FILE__ ) . 'lobsterfonterizer.css');

}

add_action('wp_enqueue_scripts', 'lobsterfonterizer');