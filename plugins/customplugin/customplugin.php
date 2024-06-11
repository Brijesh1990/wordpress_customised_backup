<?php

/*
   Plugin Name: Custom plugin
   Plugin URI: http://onlineportfolio.byethost14.com/
   description: A simple custom plugin
   Version: 1.0.0
   Author: Brijesh Kumar Pandey 
   Author URI: http://onlineportfolio.byethost14.com/
*/

function customplugin_table()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $tablename = $wpdb->prefix."add_entry";
  
    $sql = "CREATE TABLE $tablename (
    id mediumint(11) NOT NULL AUTO_INCREMENT,
    name varchar(80) NOT NULL,
    username varchar(80) NOT NULL,
    email varchar(80) NOT NULL,
    password varchar(80) NOT NULL,
    address varchar(80) NOT NULL,
    gender varchar(80) NOT NULL,
    PRIMARY KEY  (id)
    ) $charset_collate;";
  
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql);
  
  }
  register_activation_hook( __FILE__, 'customplugin_table' );
  
// add custom menu

function customplugin_menu()
{
    add_menu_page("Custom plugin","Custom plugin","manage options","ourplugin","displaylist",plugins_url('customplugin/img/icon.png'));

    add_submenu_page("ourplugin","Add New Entry","Add New Entry","manage_options","addnewentry","addEntry");

    add_submenu_page("ourplugin","Manage Entry","Manage Entry","manage_options","managentry","manageentry");

    add_submenu_page("ourplugin","Display List","Show List","manage_options","showdata","showdata");

}

add_action("admin_menu","customplugin_menu");


//add addentry data

function addEntry()
{
    include "addentry.php";
}

//show data data

function showdata()
{
    include "showdata.php";
}


//show data data

function editshowdata()
{
    include "editshowdata.php";
}


?>