<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/css/admin
 * This file contains the admin style.
 * 
 **/ 

// Require all icon library css files for the admin section.
$iconlib = deyan_get_iconlib();

$vars['sprites'] = elgg_get_site_url() . 'mod/' . deyan_get_iconlib_plugin($iconlib) . '/views/default/icon_libraries/' . $iconlib . '/sprites/';

$iconcss = deyan_get_iconlib_css($iconlib);

foreach($iconcss as $css) {
echo elgg_view("icon_libraries/$iconlib/css/$css", $vars);
}

?> 

/* ***************************************
	ICONS LIBRARY (icons menu)
*****************************************/
.elgg-menu > li > a {
	display: block
}

.elgg-menu-icons {
	display: inline-block;

}

.elgg-menu-icons > li {
	float: left;
}

.elgg-menu-icons > li > a {
	padding: 10px;
	background: #444;
	color: #fff;
	margin: 10px;
	width: 90px;
	height: 90px;
	text-align: center;
	border: 1px solid rgba(255, 255, 255, .5);
	border-radius: 5px;
}

.elgg-menu-icons > li > a:hover {
	color: #000;
	text-decoration: none;
}

/* ***************************************
	XOR SELECTOR
*****************************************/
.deyan-xor-selector li {
	float: left;
	margin: 10px;
	text-align: center;
	cursor: pointer;
}
.deyan-xor-selector img {
	border-radius: 5px;
	width: 128px;
	height: 128px;
	cursor: pointer;
}