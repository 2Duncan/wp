<?php
/**
 * Plugin Name: Custom
 * Description: Demonstrates Action, Filter, and Shortcode.
 */

// 1. ADD_ACTION: "Do something"
// We use the 'wp_footer' hook to inject a message at the bottom of the UI.
function my_footer_notice() {
    echo '<p style="text-align:center; color:red;">This is an Action in the Footer!</p>';
}
add_action('wp_footer', 'my_footer_notice');

// 2. ADD_FILTER: "Change something"
// We use the 'the_title' hook to modify how post titles look in the UI.
function my_custom_title($title) {
    return '⭐ ' . $title; // Always RETURN the modified data
}
add_filter('the_title', 'my_custom_title');

// 3. ADD_SHORTCODE: "Replace something"
// This creates [greet] which you can type in the Block Editor UI.
function my_greeting_shortcode() {
    return "<h3>Hello! This content came from a Shortcode.</h3>";
}
add_shortcode('greet', 'my_greeting_shortcode');
//cool
?>