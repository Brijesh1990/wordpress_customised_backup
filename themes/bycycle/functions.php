<?php
function load_stylesheets()

{
   wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',array(),false,'all');
   wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',array(),false,'all'); 
   wp_enqueue_style('nav',get_template_directory_uri().'/css/nav.css',array(),false,'all');

}

add_action("wp_enqueue_scripts","load_stylesheets");



function addjs()

{

   

   wp_enqueue_script('jquery_cdn',get_template_directory_uri().'/js/jquery.min.js',array('jquery'),false,true);

   wp_enqueue_script('easydropdown',get_template_directory_uri().'/js/jquery.easydropdown.js',array('jquery'),false,true);
   
   wp_enqueue_script('responsiveslides',get_template_directory_uri().'/js/responsiveslides.min.js',array('jquery'),false,true);
   
   wp_enqueue_script('move-top',get_template_directory_uri().'/js/move-top.js',array('jquery'),false,true);
   
   wp_enqueue_script('easing',get_template_directory_uri().'/js/easing.js',array('jquery'),false,true);
   
   wp_enqueue_script('flexisel',get_template_directory_uri().'/js/jquery.flexisel.js',array('jquery'),false,true);
   
   

   
}

add_action("wp_enqueue_scripts","addjs");

?>