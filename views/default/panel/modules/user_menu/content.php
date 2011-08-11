<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view panel/modules/user_menu/content
 * This file shows the user's menu
 * 
 **/
$user = elgg_get_logged_in_user_entity();
$icon_url = $user->getIconURL('small');
$icon = deyan_view_icon('user-alt', 32);
if(elgg_get_plugin_user_setting('avatar_panel', $user->guid, 'deyan')) {
	$icon = "<img src=\"$icon_url\" class=\"deyan-panel-avatar\"/>";
     }
echo deyan_view_panel_module('user-menu', elgg_view_menu('user', array('sort_by' => 'priority')), 'small', $icon);


?>