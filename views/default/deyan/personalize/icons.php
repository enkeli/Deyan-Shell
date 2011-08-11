<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/appearance/icons
 * The usersettings page for icon libraries
 * 
 **/  

// Get the themes list from the plugin's directory and set each as an option.
$iconlibs = deyan_get_iconlib_list();
 foreach($iconlibs as $iconlib) {
	    $preview = deyan_get_iconlib_preview($iconlib);
	    $options[$iconlib . '<br>' . $preview] = $iconlib;
	}

// Display the form to choose a theme from theme list.
$form_vars = array('id' => 'deyan-iconlib-settings-form');
$body_vars = array(
	'value'		=> elgg_get_plugin_user_setting('icons', $vars['user']->guid, 'deyan'),
	'name'		=> 'iconlib_user',
	'options' 	=> $options,
	'class'		=> 'deyan-xor-selector',
	);
$form = elgg_view_form('deyan/xor_selector', $form_vars, $body_vars);

echo elgg_view_module('info', elgg_echo('deyan:iconlib:choose'), $form);
