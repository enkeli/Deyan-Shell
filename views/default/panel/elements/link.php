<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/panel/elements/link
 * This file is a view that accepts vars to show links on the panel
 * 
 * 
 **/ 
?>
<div class="deyan-panel-item">
	<?php 	
		echo deyan_view_link($vars['href'], $vars['icon']);
	?>
</div>