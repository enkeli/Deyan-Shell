<?php
/*
  Save Custom Background
*/

$user = elgg_get_logged_in_user_entity();

$bgurl = get_input('background_url');
    elgg_set_plugin_user_setting('background_url', $bgurl, $user->guid, 'deyan');
    $background = "url($bgurl) ";
    
$repeat = get_input('background_repeat');
    elgg_set_plugin_user_setting('background_repeat', $repeat, $user->guid, 'deyan');
    $background .= "$repeat ";

$fixed = get_input('background_fixed');
	if ($fixed) {
		elgg_set_plugin_user_setting('background_fixed', 'fixed', $user->guid, 'deyan');
		$background .= "fixed ";
	} else {
		elgg_unset_plugin_user_setting('background_fixed', $user->guid, 'deyan');
	}

    
elgg_set_plugin_user_setting('background', $background, $user->guid, 'deyan');
    
    
    
$custom = get_input('background_custom');
	if ($custom) {
		elgg_set_plugin_user_setting('background_custom', 1, $user->guid, 'deyan');
	} else {
		elgg_unset_plugin_user_setting('background_custom', $user->guid, 'deyan');
	}
	

/*
Use windows scroll
*/	
$scroll = get_input('window_scroll');
	if ($scroll) {
		elgg_set_plugin_user_setting('window_scroll', 1, $user->guid, 'deyan');
	} else {
		elgg_unset_plugin_user_setting('window_scroll', $user->guid, 'deyan');
	}
	
/******************************
 UPGRADE SIMPLECACHE
******************************/
    elgg_regenerate_simplecache();