<?php
/*
Plugin Name: Qudian
Plugin URI: http://qudian.so
Description: Content clue sharing service to build knowledge interest index. The official extension from Qudian Tech Inc. (qudian.so).
Version: 0.1.1
Author: qudianso
Author URI: http://qudian.so
 */

function loadQfo () {
  wp_enqueue_style('style', plugins_url('css/style.css', __FILE__), false);
  wp_enqueue_script('easyXDM', plugins_url('js/easyXDM.min.js', __FILE__ ), false);
  wp_enqueue_script('qfo', plugins_url('js/qfo.min.js', __FILE__ ), false);
  wp_enqueue_script('qlet', plugins_url('js/qlet.min.js', __FILE__ ), false);
  wp_enqueue_script('inline', plugins_url('inline.js', __FILE__ ), false);
}

add_action('wp_footer', 'loadQfo');
?>
