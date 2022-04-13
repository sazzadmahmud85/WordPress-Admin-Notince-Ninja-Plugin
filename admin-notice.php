<?php
/*
Plugin Name: Admin Notice Ninja
Plugin URI: http://github.com/sazzadmahmud85
Description: This is a plugin of admin notice ninja.
Version: 1.0
Author: Sazzad Mahmud
Author URI: http://github.com/sazzadmahmud85
License: GPLv2 or later
Text Domain: 
Domain Path: /languages/
*/

function nn_admin_notice(){
    if(!(isset($_COOKIE['nn-close']) && $_COOKIE['nn-close'] == 1)){
        ?>
        <div id="noticeninja" class="notice notice-success is-dismissible">
            <h1>Here is a Heading</h1>
            <p>Hey, here is some information for you.</p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'nn_admin_notice');

add_action('admin_enqueue_scripts', function(){
    wp_enqueue_script('noticeninja-js', plugin_dir_url(__FILE__)."assets/js/script.js", array('jquery'), time());
});





