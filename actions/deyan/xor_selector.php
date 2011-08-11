<?php
/**
 * Save  settings
 */

/******************************
 PLUGIN SETTINGS
******************************/
//Only change plugin general settings when an admin is logged in
if(elgg_is_admin_logged_in) {

    //Default Theme
    $theme = get_input('theme');
    //If the action is called by theme settings, var $theme must have a value.
    if(!empty($theme)) {
    elgg_set_plugin_setting('theme', $theme, 'deyan');
    system_message($theme . elgg_echo('deyan:theme:changed:default'));
    }
    
    //Icon Library
    $icons = get_input('icons');
    //Else, if the action is called by icons settings, var $icons must have a value.
    if(!empty($icons)) {
    elgg_set_plugin_setting('icons', $icons, 'deyan');
    system_message($icons . elgg_echo('deyan:icons:library:changed:default'));
    }
}

/******************************
 USERSETTINGS
******************************/
    //User theme
    $theme = get_input('theme_user');
    //If the action is called by theme usersettings, var $theme must have a value.
    if(!empty($theme)) {
    $user = elgg_get_logged_in_user_entity();

    elgg_set_plugin_user_setting('theme', $theme, $user->guid, 'deyan');
    system_message($theme . elgg_echo('deyan:theme:changed'));
    }
    
    //User iconlib
    $iconlib = get_input('iconlib_user');
    //If the action is called by iconlib usersettings, var $iconlib must have a value.
    if(!empty($iconlib)) {
    $user = elgg_get_logged_in_user_entity();

    elgg_set_plugin_user_setting('icons', $iconlib, $user->guid, 'deyan');
    system_message($iconlib . elgg_echo('deyan:iconlib:changed'));
    }


/******************************
 UPGRADE SIMPLECACHE
******************************/
    elgg_regenerate_simplecache();


forward(REFERER);

