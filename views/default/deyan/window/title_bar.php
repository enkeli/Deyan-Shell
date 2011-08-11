<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/window/title_bar
 * This file holds the title bar output that every window has
 * 
 **/ 
?>

      <div class="deyan-titlebar-right">
	<a href="<?php echo elgg_get_site_url(); if(elgg_is_logged_in()){ echo 'dashboard';} ?> ">
	  <span class="deyan-titlebar-right deyan-icon-close">
	  </span>
	</a> 
      </div>
      
      <div class="deyan-titlebar-middle">
	  <?php echo $vars['title']; ?>
      </div>
      
      <div class="deyan-titlebar-left">
	  <?php echo elgg_view_menu('extras', array('sort_by' => 'name', 'class' => 'elgg-menu-hz')); ?>
      </div>
  
