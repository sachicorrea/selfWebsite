<?php
/**
 * Plugin Name: Hooks Test
 * 
 */

// Add text to login screen
function hello_world(){
    echo "Hello Alan!";
}

add_action('login_header', 'hello_world');

// Modify URL on login screen
function change_headerurl(){
    $url = "http://www.coaching.pe/";
    return $url;
}
add_filter('login_headerurl', 'change_headerurl');