<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/appearance/custom
 * The usersettings page for custom appearance
 * 
 **/  

// Display an input field to let user's override the theme background image with a custom one

$form_vars = array('id' => 'deyan-panel-form');
	
$form = elgg_view_form('deyan/panel', $form_vars);

echo elgg_view_module('info', elgg_echo('deyan:panel:general'),$form);

