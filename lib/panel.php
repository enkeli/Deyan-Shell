<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @library panel
 * This library contains functions for the panel.
 * 
*/ 





/**
 * A replacement for the function <elgg_view_module> to change the css class.
 * this is used by view panel/elements/module. For echo a module the function deyan_view_panel_module
 * should be used. 
 * @see deyan_view_panel_module()
 *
 * @param string $size The size of the module.
 * @param string $body The content of the module. 
 * @param string $id   The unique id for the module. 
 *
 * @return string The parsed view.
 */
function deyan_view_module($size, $body, $id) {
	$vars['class'] .= " deyan-panel-module-$size"; 
	$vars['body'] = $body;
	$vars['id'] = $id;
	return elgg_view('page/components/module', $vars);
}




/**
 * Shorthand for the view <output/url>. To echo a link on the panel,
 * @see deyan_view_panel_link()
 *
 * @param string $href The link.
 * @param string $icon The icon to show. 
 * @param string $rel  <parent> or <popup> 
 *
 * @return string The parsed view.
 */
function deyan_view_link($href, $icon, $rel = 'parent') {
	$class = 'normal';
	if($rel == 'popup'){
	      $class = 'dropdown';
	  }
return	elgg_view('output/url', array(
			'href' => $href,
			'rel' => $rel,
			'class' => "elgg-button elgg-button-$class",
			'text' => $icon,
		)); 
}





/**
 * Shorthand way to parse the $vars to view deyan/panel/elements/module.
 * this function should be used in a view to be registered as a module for the panel.
 * to register a module for the panel, @see deyan_register_panel_mod()
 * @example view <panel/modules/start_menu>
 *
 * @param string $id      The id for the module.
 * @param string $content The content of the module. 
 * @param string $size    The size of the module. 
 * @param string $icon    The icon for the item on the panel. 
 *
 * @return string the link to show on panel & the module.
 */
function deyan_view_panel_module($id, $content, $size, $icon){	
	$vars['id'] = $id;
	$vars['content'] = $content;
	$vars['size'] = $size;
	$vars['icon'] = $icon;

return elgg_view('panel/elements/module', $vars);
}




/**
 * Shorthand way to parse the $vars to view panel/elements/link.
 * this function should be used in a view to be registered as a link for the panel.
 * to register a link for the panel, @see deyan_register_panel_mod()
 * @example view <panel/modules/dashboard>
 *
 * @param string $id      The id for the link.
 * @param string $href 	  The url of the link. 
 * @param string $icon    The icon for the link on the panel. 
 *
 * @return string the link to show on panel & the module.
 */
function deyan_view_panel_link($href, $icon){	
	$vars['href'] = $href;
	$vars['icon'] = $icon;

return elgg_view('panel/elements/link', $vars);
}




/**
 * Function to register a item for the panel. You must have a view with a module/link for the panel
 * wich will be registered.
 *
 * @param string $mod     The name of the module that contains the module/link for the panel to be registered.
			  It must be in the view folder <panel/modules>
 * @param string $side    Wich side of the panel will be used for the module/link. 
			  Options: 'left' & 'right'. Default 'left'.
 * @param int $priority   Priority of the item. Same as elgg priority system, <500 first; >500 last. 
 *
 * @return void.
 */
function deyan_register_panel_mod($mod, $side = 'left', $priority = 501){
	elgg_extend_view("panel/$side", "panel/modules/$mod/content", $priority);
} 




/**
 * Function to unregister a item for the panel.
 *
 * @param string $mod    The name of the module that contains the module/link for the panel to be unregistered.
 *
 * @return void.
 */
function deyan_unregister_panel_mod($mod){
	
		elgg_unextend_view("panel/left", "panel/modules/$mod/content");
		elgg_unextend_view("panel/right", "panel/modules/$mod/content");
} 
