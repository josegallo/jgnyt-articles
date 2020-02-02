<?php 

/*
*
* Plugin name: Jose Gallo get articles from New Yor Times
* Plguin URI: http//josegallo.net
* Description: Provides both widgets and shortcodes to help you display NY Times articles on your wordpress website.
* Version: 1.0
* Autor: Jose Gallo
* Author URI: http//josegallo.net
* License: GPL2
*
*/


//create global variable for url plugin
$plugin_url = WP_PLUGIN_URL . '/jgnty-articles';
$options = array();

//create page on the admin page. Section Settings

function jgnyt_articles_menu()
{
	add_options_page( // function to add page on admin menu setting
			'Jose Gallo NY Timmes Articles Plugin', //name of the page
			'NY Times Articles', // Menu Title
			'manage_options', //Capability
			'jgnyt-articles', //slug
			'jgnyt_articles_options_page' //function to run
		); //add submenu page to the Setting menu
}

add_action('admin_menu', 'jgnyt_articles_menu'); //hook function jgnyt_articles_menu to admin_menu


//add back-end dashboard (file ) options-page-wrapper.php
function jgnyt_articles_options_page (){

	global $options;
	global $plugin_url;
		
	//check if user has permissions
	if (!current_user_can('manage_options')) { //if user can not manage options
		wp_die("You don't have enough permisions"); //throw eror
	}

	// get the post value from APIKEY and String form at dashobaord
	if (isset($_POST['jgnyt_form_submited'])) {
		$hidden_field = esc_html($_POST['jgnyt_form_submited'] ) ;
		
		if ($hidden_field =="Y"){
			$jgnyt_search = esc_html( $_POST["jgnyt_search"] );
			$jgnyt_apikey = esc_html( $_POST["jgnyt_apikey"] );
			// echo $jgnyt_search . $jgnyt_apikey;

			//Each time the API Key is updated is stored on ddbb
			$options["jgnyt_search"]= $jgnyt_search;
			$options["jgnyt_apikey"] = $jgnyt_apikey;
			$options['time'] = time();
			update_option( "jgnyt_articles", $options);	
		}
	} 
	//if reload the webpage we get the options for ddbb
	$options = get_option( "jgnyt_articles");
	// var_dump ($options);
	
	if ($options !== "") {
		$jgnyt_search = $options["jgnyt_search"];
		$jgnyt_apikey = $options["jgnyt_apikey"];
	}

	//instert blocks of the section
	require('inc/options-page-wrapper.php');
}

//add stytle to plugin
function jgnyt_articles_backend_styles(){
	
	wp_enqueue_style( //enqueue a css style sheet
		'jgnyt-articles-backend-css', //name of the stylesheet (handle)
		plugins_url( 'jgnyt-articles/jgnyt-articles.css') //name of the src 
	);
}

add_action('admin_head', 'jgnyt_articles_backend_styles');


?>