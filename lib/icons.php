<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @library icons
 * This library contains functions for icon libraries.
 * 
*/ 





/**
 * View an icon from the icon's library
 * 
 * Shorthand for <span class="deyan-icon-$size deyan-icon-$name-$size"></span>
 * 
 * @param string $name  The specific icon to display
 * @param int    $size  The size of the icon. 16, 32, 64.
 * @param bool   $float Whether to float the icon
 * 
 * @return string The html for displaying an icon
 */
function deyan_view_icon($name, $size = 64, $float = false) {
	if ($float) {
		$float = 'float';
	}
	return "<span class=\"deyan-icon-$size deyan-icon-$name-$size $float\"></span>";
}




/**
 * Register's menu items for icon's menu. Used in icon libraries in the preview.php
 * to view the icons in the admin @link /admin/utilities/icons
 *
 * @param array $icons	An array with names of the icons to register.
 * @param int   $size	The size of the icons. Default <64>
 *
 * @return void
*/
function deyan_icons_menu($icons, $size = 64) {
	foreach ($icons as $icon) {
	elgg_register_menu_item('icons', array(
				'name' => $icon,
				'href' => "#$icon",
				'text' => deyan_view_icon($icon, $size) . $icon,
			));
	}
}



/**
 * Get the list of icon libraries aviable from deyan's plugin directory
 *
 * @return array 	An array with the names of the icon libraries aviable.
 *
*/
function deyan_get_iconlib_list() {
	
	$list = elgg_get_config('iconlibs');
	foreach($list as $iconlib => $plugin) {
		$icons[] = $iconlib;
	}
	return $icons;
}



/**
 * Get the image preview of an icon library
 *
 * @param string	the name of icon library to get preview from.
 *
 * @return string	HTML of the image.
*/
function deyan_get_iconlib_preview($iconlib) {
	      
	       $plugin = deyan_get_iconlib_plugin($iconlib);
	      $img = "<img src=\"" . elgg_get_site_url() . "mod/$plugin/views/default/icon_libraries/$iconlib/preview.png\">";
	      
	      return $img;
	      
}



/**
 * Get the list of css files of the actual icon library
 *
 * @return array	An array containing the names of each css file.
*/
function deyan_get_iconlib_css($iconlib) {
	$dir = deyan_get_iconlib_dir($iconlib) . "css/";
	$icons = elgg_get_file_list($dir, '', '', '.php');
	
	foreach ($icons as $iconcss) {
		$iconcss = str_replace('.php', '', $iconcss);
		$iconcss = str_replace($dir, '', $iconcss);
		
		$css[] = $iconcss; 
		
	}
	 	
	 	
	return $css;
}



/**
 * Get the name of the actual icon library.
 *
 * @return string	The name of the actual icon library
*/
function deyan_get_iconlib() {
$iconlib = elgg_get_plugin_user_setting('icons', elgg_get_logged_in_user_guid(), 'deyan');
	
	if(empty($iconlib)){
	
		 $iconlib = elgg_get_plugin_setting('icons', 'deyan');
		 
	}

	return $iconlib;

}




/**
 * Get the dirname of an icon library.
 *
 * @param string $iconlib	The name of the iconlib.
 *
 * @return string	The dirname of the icon library
*/
function deyan_get_iconlib_dir($iconlib) {

	 return elgg_get_view_location("icon_libraries/$iconlib/preview") . "default/icon_libraries/$iconlib/";
}




/**
 * Get the plugin name of an iconlib.
 *
 * @param string $iconlib		The name of the iconlib from wich obtain the name of the plugin who
 *				registered it.
 *
 * @return string	The plugin name who registered the iconlib
*/
function deyan_get_iconlib_plugin($iconlib) {

	$iconlibs = elgg_get_config('iconlibs'); 
	return $iconlibs[$iconlib];

}




/**
 * Register a Icon Library in $CONFIG
 *
 * @return void
*/
function deyan_register_iconlib($iconlib) {
	 	
	 $icons = elgg_get_config('iconlibs');
	 $icons[$iconlib] = elgg_get_calling_plugin_id();
	 elgg_set_config('iconlibs', $icons);
}

