<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/css/handler
 * This file handles the style and the constants.
 * 
 **/  
 
// Get the current theme & the constants.
$theme = deyan_get_theme();
$vars['theme'] = deyan_get_theme_constants($theme); 

// if the user wants, override theme's background with a custom one
if(elgg_get_plugin_user_setting('background_custom', $vars['user']->guid, 'deyan')) {
	$vars['theme']['background'] = deyan_get_background(elgg_get_logged_in_user_guid()); 
}




/*******************************************************************************

Base CSS
 * CSS reset
 * core
 * helpers (moved to end to have a higher priority)
 * grid
 * misc(shell)	  - miscelaneous helpers for deyan shell.

*******************************************************************************/
echo elgg_view("css/elements/reset", $vars);
echo elgg_view("css/elements/core", $vars);
echo elgg_view("css/elements/grid", $vars);


/*******************************************************************************

Skin CSS
 * typography     - fonts, line spacing
 * forms          - forms, inputs
 * buttons        - action, cancel, delete, submit, dropdown, special
 * navigation     - menus, breadcrumbs, pagination
 * icons          - icons, sprites, graphics
 * modules        - modules, widgets
 * layout_objects - lists, content blocks, notifications, avatars
 * layout         - page layout
 * misc           - to be removed/redone
 * panel	  - panel (topbar)	
 * window	  - windows
 *
*******************************************************************************/
echo elgg_view("themes/$theme/css/typography", $vars);
echo elgg_view("themes/$theme/css/forms", $vars);
echo elgg_view("themes/$theme/css/buttons", $vars);
echo elgg_view("themes/$theme/css/icons", $vars);
echo elgg_view("themes/$theme/css/navigation", $vars);
echo elgg_view("themes/$theme/css/modules", $vars);
echo elgg_view("themes/$theme/css/components", $vars);
echo elgg_view("themes/$theme/css/layout", $vars);
echo elgg_view("themes/$theme/css/misc", $vars);
echo elgg_view("themes/$theme/css/panel", $vars);
echo elgg_view("themes/$theme/css/window", $vars);



/************************************************
// BASE CSS included last to have higher priority
*************************************************/
echo elgg_view("css/elements/helpers", $vars);
echo elgg_view('deyan/css/misc', $vars);



/*******************************************************************************
Icons CSS

Echo all the icons css views.
*******************************************************************************/

$iconlib = deyan_get_iconlib();

$vars['sprites'] = elgg_get_site_url() . 'mod/' . deyan_get_iconlib_plugin($iconlib) . '/views/default/icon_libraries/' . $iconlib . '/sprites/';

$iconcss = deyan_get_iconlib_css($iconlib);

foreach($iconcss as $css) {
$option = elgg_get_plugin_setting("iconadmin_$css", 'deyan');
	if ($option) {
		echo elgg_view("icon_libraries/$iconlib/css/$css", $vars);
	}

}
