<?php

/**
 
 * @package         Manage Agency 
 * @author          BuiVinh(Twinger)
 * Plugin Name:     Manage Agency
 * Plugin URI:      https://twinger.vn/
 * Author URI:      https://twinger.vn/
 * Description:     Sử dụng trong nội bộ Twinger.
 * Version:         0.1.0
 * Author:          Twinger
 * Domain Path:     /languages
 * Network:         true
 * Requires PHP:    5.6.0
 * Text Domain:     tw-agency
  

 */

 define('THEME_URI', uri());
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if (!is_multisite()) {
    return;
}
if (!class_exists('TwAgency')) {
    class TwAgency
    {
        /**
         * A dummy constructor to ensure Manage Agency is only setup once.
         *
         * @date    25/08/2023
         * @since   0.1.0
         *
         * @return  void
         */
        public function __construct()
        {
            // Do nothing.
        }
        function register_post_types()
        {
        }
        function activate()
        {
            flush_rewrite_rules();
        }
        function enqueue()
        {
            wp_enqueue_style('css',plugins_url('/style.min.css',__FILE__),)
        }
        function deactivate()
        {
            flush_rewrite_rules();
        }
        static function uninstall()
        {
        }
    }






    $twAgency = new TwAgency();

    //activate
    register_activation_hook(__FILE__, array($twAgency, 'activate'));

    //deactivate
    register_deactivation_hook(__FILE__, array($twAgency, 'deactivate'));
}
