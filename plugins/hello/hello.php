<?php
/**
 * @package Hello_Dolly
 * @version 1.0
 */
/*
Plugin Name: Hello Dolly
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.0
Author URI: http://ma.tt/
Update URI: http://wordpress.org/plugins/hello-dolly/
*/

function hello_dolly_get_lyric() {
}

function hello_dolly() {
  hello_dolly_get_lyric();
}

add_action( 'admin_notices', 'hello_dolly' );
