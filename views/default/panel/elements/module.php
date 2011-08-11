<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/panel/elements/module
 * This file is a view that accepts vars to show dropdown modules with full size on the panel
 * 
 * 
 **/ 
?>
<div id="deyan-panel-module-<?php echo $vars['id'];?>" class="deyan-panel-item">
	<?php 
	
		$body = "<div class=\"deyan-panel-module-{$vars['size']}-inner\">";
		$body .= $vars['content'];
		$body .= "</div>";
	 
		echo deyan_view_link("#deyan-panel-module-id-{$vars['id']}", $vars['icon'], 'popup');
		echo deyan_view_module($vars['size'], $body, "deyan-panel-module-id-{$vars['id']}"); 
	?>
</div>