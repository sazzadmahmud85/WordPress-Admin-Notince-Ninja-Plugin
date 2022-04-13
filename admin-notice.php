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
    global $pagenow;
    if(!(isset($_COOKIE['nn-close']) && $_COOKIE['nn-close'] == 1)){
        if(in_array($pagenow, ['index.php', 'themes.php'])){
            ?>
            <div id="noticeninja" class="notice notice-custom notice-success is-dismissible">
                <h1>Here is a Heading</h1>
                <p>Hey, here is some information for you.</p>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReAamAasjouviRtJXa-iCKPgLbjYnKaTbbfYuD_72ak4-x6kOM8U1u-O9MLj1OkL2uVSc&usqp=CAU" alt="">
            </div>
            <?php
        }
    }
}
add_action('admin_notices', 'nn_admin_notice');

add_action('admin_enqueue_scripts', function(){
    wp_enqueue_script('noticeninja-js', plugin_dir_url(__FILE__)."assets/js/script.js", array('jquery'), time());
    wp_enqueue_style('noticeninja-css', plugin_dir_url(__FILE__)."assets/css/style.css", null, time());
});





