<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @settings 
 *
 * Shell core settings
 * 
 **/ 
// set default values
if (!isset($vars['entity']->user_scroll)) {
	$vars['entity']->user_scroll = 'yes';
}
if (!isset($vars['entity']->theme_selector)) {
	$vars['entity']->theme_selector = 'yes';
}
if (!isset($vars['entity']->icon_selector)) {
	$vars['entity']->icon_selector = 'yes';
}

echo '<div>';
echo elgg_echo('deyan:scroll:admin');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[user_scroll]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
	),
	'value' => $vars['entity']->user_scroll,
));

echo '<div>';
echo elgg_echo('deyan:theme:admin');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[theme_selector]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
	),
	'value' => $vars['entity']->theme_selector,
));

echo '<div>';
echo elgg_echo('deyan:icons:library:admin');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[icon_selector]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
	),
	'value' => $vars['entity']->icon_selector,
));
