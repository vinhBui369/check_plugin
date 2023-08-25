<?php


/**
 * Trigger this file on plugin uninstall
 * 
 * @package         Manage Agency 
 * @author          BuiVinh(Twinger)
 * 
 * 
 * 
 *  */


if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
// delete Database stored data

// Access the database via SQL 
global $wpdb;
// $wpdb -> query(" DELETE FROM  ");
