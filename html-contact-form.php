<?php
/*
Plugin Name: HTML Contact Form
Plugin URI: http://www.htmlcontactform.net/
Description: contact Form: Simple but flexible contact form. Easy to add CSS styling or input fields (HTML5)
Text Domain: html-contact-form
Version: 1.1.2
Author: Arshid
Author URI: http://www.htmlcontactform.net/
*/


function HTML_CF_florm_activate() {
    
    $toEmail = get_option( 'admin_email' );
	add_option( 'HTML_CF_code','-' , '', 'yes' );
	add_option( 'html_CF_Email', $toEmail, '', 'yes' );
	require 'form.php';
	$codeText = rawurlencode($codeText);
	update_option('HTML_CF_code', $codeText);
}
register_activation_hook( __FILE__, 'HTML_CF_florm_activate' );


function HTML_CF_florm_load(){


	require 'HTML_CF_Settings.php';
	require 'HTML_CF_front_end.php';

	load_plugin_textdomain( 'html-contact-form', false, plugin_basename( dirname( __FILE__ ) ) . '/lang' ); 


	$HTML_CF_Settings  = new HTML_CF_Settings();
	$HTML_CF_Front_End = new HTML_CF_Front_End();

}
add_action('plugins_loaded', 'HTML_CF_florm_load');

 
// Add settings link on plugin page
function HTML_CF_settings_link($links) { 
  $settings_link = "<a href='options-general.php?page=html-contact-form'>".__('Settings','html-contact-form')."</a>"; 
  array_unshift($links, $settings_link); 
  return $links; 
}
 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'HTML_CF_settings_link' );


//Plugin deactivation 
function HTML_CF_deactivation() {
	
	delete_option( 'HTML_CF_code' );
	delete_option( 'html_CF_Email' );
}
register_deactivation_hook( __FILE__, 'HTML_CF_deactivation' );



 
 

?>