<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @library deyan
 * This library contains general/core functions for the shell
 * 
*/




/**
 * This function does some admin actions, like register admin menus, extend the admin
 * css, etc. It is called by deyan start.php, and shouldn't be called again.
 *
 * @access private
 *
 * @return void
*/
function deyan_admin_init() {
	// Add admin menu item
	elgg_register_admin_menu_item('configure', 'icons', 'appearance');
	elgg_register_admin_menu_item('configure', 'theme', 'appearance');
	
	
	//customize admin css
	elgg_extend_view('css/admin', 'deyan/css/admin');
	
	$iconlib = deyan_get_iconlib();
	require_once deyan_get_iconlib_dir($iconlib) . 'preview.php';
}




/**
 * This function loads a page wich need to be in page folder in caller plugin root directory.
 *
 * @param string $page	The name of the page in page's folder to be loaded.
 * @param array  $vars  An array of values to be passed to the page
 *
 * @return all the page required
*/
function deyan_load_page($page, $vars = array()) {
	$dir = elgg_get_plugins_path();
	$plugin = elgg_get_calling_plugin_id();
	
	$dir .= $plugin;
	$dir .= "/pages/$page.php";
	
	
	return require_once $dir;
}




/**
 * Gets the unread messages
 *
 * @return array
 */
function deyan_get_unread_messages() {
	$user_guid = elgg_get_logged_in_user_guid();
	$db_prefix = elgg_get_config('dbprefix');

	// denormalize the md to speed things up.
	// seriously, 10 joins if you don't.
	$strings = array('toId', $user_guid, 'readYet', 0, 'msg', 1);
	$map = array();
	foreach ($strings as $string) {
		$id = get_metastring_id($string);
		$map[$string] = $id;
	}

	$options = array(
//		'metadata_name_value_pairs' => array(
//			'toId' => elgg_get_logged_in_user_guid(),
//			'readYet' => 0,
//			'msg' => 1
//		),
		'joins' => array(
			"JOIN {$db_prefix}metadata msg_toId on e.guid = msg_toId.entity_guid",
			"JOIN {$db_prefix}metadata msg_readYet on e.guid = msg_readYet.entity_guid",
			"JOIN {$db_prefix}metadata msg_msg on e.guid = msg_msg.entity_guid",
		),
		'wheres' => array(
			"msg_toId.name_id='{$map['toId']}' AND msg_toId.value_id='{$map[$user_guid]}'",
			"msg_readYet.name_id='{$map['readYet']}' AND msg_readYet.value_id='{$map[0]}'",
			"msg_msg.name_id='{$map['msg']}' AND msg_msg.value_id='{$map[1]}'",
		),
		'owner_guid' => $user_guid,
		'full_view' => false,
		'limit' => 0
	);

	$messages = elgg_list_entities_from_metadata($options);

	return $messages;
}