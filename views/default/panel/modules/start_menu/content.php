<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view panel/modules/start_menu/content
 * This file shows the main menu
 * 
 **/

$content = elgg_view_menu('start', array('sort_by' => 'priority'));
$content .= "<div class=\"clearfloat\"></div>";

echo deyan_view_panel_module('start-menu', $content, 'full', deyan_view_icon('apps', 32));
?>