<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @library deyan
 * This library contains functions for themes.
 * 
*/ 









/**
 * Get the name of the actual theme.
 *
 *
 * @return string	The name of the actual theme
*/
function deyan_get_theme() {
	$theme = elgg_get_plugin_user_setting('theme', elgg_get_logged_in_user_guid(), 'deyan');
	
	if(empty($theme)){
	
		 $theme = elgg_get_plugin_setting('theme', 'deyan');
		 
	}
	
	return $theme;
	 
}




/**
 * Get the dirname of one theme.
 *
 * @param string $theme		The name of the theme wich obtain the dirname from.
 *
 * @return string	The dirname of the theme
*/
function deyan_get_theme_dir($theme) {
		
	 return elgg_get_view_location("themes/$theme/constants") . "default/themes/$theme/";
		 
}




/**
 * Get the plugin name of one theme.
 *
 * @param string $theme		The name of the theme from wich obtain the name of the plugin who
 *				registered it.
 *
 * @return string	The plugin name who registered the theme
*/
function deyan_get_theme_plugin($theme) {
	$themes = elgg_get_config('themes'); 
	return $themes[$theme];

}






/**
 * Get the constants from the constants.php of the theme. Those constants will be passed to your theme css views
 * in the $vars['theme'] array. So in your css files you can use them like $vars['theme'][$constant].
 *
 * @param string $theme 	The theme to get the constants from.
 *
 * @return array 	The array of constants.
*/
function deyan_get_theme_constants($theme) {
	 
	 
	require_once deyan_get_theme_dir($theme) . "constants.php";
	$vars['dir'] = deyan_get_theme_dir($theme);
	
	$plugin = deyan_get_theme_plugin($theme);
	$vars['url'] = elgg_get_site_url() . "mod/$plugin/views/default/themes/$theme/";
	return $vars;
}



/**
 * Get the image preview of the theme
 *
 * @param string $theme 	the name of theme to get preview from.
 *
 * @return string	HTML of the image.
*/
function deyan_get_theme_preview($theme) {
	      
	      $plugin = deyan_get_theme_plugin($theme);
	      $img = "<img src=\"" . elgg_get_site_url() . "mod/$plugin/views/default/themes/$theme/preview.png\">";
	      
	      return $img;
}



/**
 * Get the list of themes aviable from deyan's plugin directory
 *
 * @return array 	An array with the names of the themes aviable.
 *
*/
function deyan_get_theme_list() {

	$list = elgg_get_config('themes');
	foreach ($list as $theme => $plugin) {
		  $themes[] = $theme;
	}
	return $themes;
}




/**
 * Registers a theme in $CONFIG
 *
 * @return void	
 *
*/
function deyan_register_theme($theme) {
	$themes = elgg_get_config('themes');
	$themes[$theme] = elgg_get_calling_plugin_id();
	elgg_set_config('themes', $themes);
}




/**
 * Get the custom background of an user.
 *
 * @param int	$guid		the id of the user to get background from.
 *
 * @return string	value for background property of body.
*/
function deyan_get_background($guid) {

	    return elgg_get_plugin_user_setting('background', $guid, 'deyan');

}
