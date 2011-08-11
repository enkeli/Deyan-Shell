<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view admin/utilities/icons
 * The admin page for the icons library
 * 
 **/ 

// Get the icon libraries list from the plugin's directory and set each as an option.
$icons = deyan_get_iconlib_list();
 foreach($icons as $iconlib) {
	    
	    $preview = deyan_get_iconlib_preview($iconlib);
	    $options[$iconlib . '<br>' . $preview] = $iconlib;
	}


$form_vars = array('id' => 'deyan-icon-settings-form');
$body_vars = array(
	'value'		=> elgg_get_plugin_setting('icons', 'deyan'),
	'name'		=> 'icons',
	'options' 	=> $options,
	'class'		=> 'deyan-xor-selector',
	);
$form = elgg_view_form('deyan/xor_selector', $form_vars, $body_vars);


$iconlib = deyan_get_iconlib();
$iconcss = deyan_get_iconlib_css($iconlib);
$form_vars = array('id' => 'deyan-icon-settings-form');
$body_vars = array(
	'options' 	=> $iconcss,
	);
$form2 = elgg_view_form('deyan/iconadmin', $form_vars, $body_vars);

echo elgg_view_module('inline', elgg_echo('deyan:icons:library:how'), elgg_echo('deyan:icons:library:use'));
echo elgg_view_module('inline', elgg_echo('deyan:icons:library:load'), $form);
echo elgg_view_module('inline', elgg_echo('deyan:icons:library:sizes'), $form2);
echo elgg_view_module('inline', elgg_echo('deyan:icons:library:preview') . $body_vars['value'], elgg_view_menu('icons', array('sort_by' => 'name')));








