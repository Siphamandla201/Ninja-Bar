<?php

/*
 * Plugin Name:       Ninja Bar
 * Description:       Removes the admin bar from the front end when viewing site
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Siphamandla Mlanjana
*/


// Removes the admin bar 
add_filter( 'show_admin_bar', '__return_false' );


function wporg_options_page() {
    add_menu_page(
        'Ninja Bar',           // The title of the menu page
        'Ninja Bar',           // The text to display in the menu
        'manage_options',      // The capability required to access the menu page
        'wporg',               // The unique slug for the menu page
        'wporg_options_page_html',  // The callback function to display the content
        'dashicons-hidden',    // The icon to display in the menu
        20                     // The position of the menu item in the menu
    );
}

// The callback function to display the content
function wporg_options_page_html() {
    // Code to display the content of the options page
    echo '<h1>Ninja Bar</h1>';
    echo '<p>Options page still under development.</p>';
}

