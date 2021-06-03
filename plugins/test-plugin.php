<?php
/*
Plugin Name: TestPluginShortcode
Plugin URI: www.example.com
Version: 1.0.0
*/

/* The above comment block identifies the plugin to WordPress. */


function testgndt_get_shortcode_example_shortcode() {
/* Shortcode functions should return some HTML:  */
  return "<p>This is a test of the shortcode plugin.</p>";
}

function testgndt_add_notice_shortcode_plugin_active() {
/* Adds a notice to the admin control panel (this will appear on every page of the dashboard)
informing that the plugin is active: */
  echo("<DIV class='notice-info'><p>The shortcode plugin is currently active.</DIV>");
}

/* Register the shortcode using add_shortcode. In this case, 'test_shortcode' is our shortcode.
It will replace [test_shortcode] in our posts with the code returned by the above function. */
add_shortcode('test_shortcode', 'testgndt_get_shortcode_example_shortcode');
/* Register the notice function to print using the admin_notices hook. */
add_action( 'admin_notices', 'testgndt_add_notice_shortcode_plugin_active');
?>

