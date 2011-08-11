<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view panel/main
 * This file contains the panel. it has 2 sections: <left view(panel/left)> <right view(panel/right)>
 * the left and right views of the panel must be extended with elgg's extend system.
 *
 * @see deyan_register_panel_mod();
 * 
 **/ 

//Left section
echo "<div class=\"deyan-panel-left\">" . elgg_view('panel/left') . "</div>";

//Right section
echo "<div class=\"deyan-panel-right\">" . elgg_view('panel/right') . "</div>";

