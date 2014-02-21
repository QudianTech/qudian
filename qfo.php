<?php
/*
Plugin Name: Qudian
Plugin URI: http://qudian.so
Description: Content clue sharing service to build knowledge interest index. The official extension from Qudian Tech Inc. (qudian.so).
Version: 0.3.0
Author: qudianso
Author URI: http://qudian.so
 */

function loadQfo () {
  wp_enqueue_style('style', plugins_url('css/qfo-v0.3.css', __FILE__), false);
  wp_enqueue_script('inline', plugins_url('inline.js', __FILE__ ), false);
}

add_action('wp_footer', 'loadQfo');
?>
