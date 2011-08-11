<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/helpers/index
 *
 * This is the main page for non-logged in people.
 *
 **/ 

?>

<div class="deyan-index">
	<ul>
		<li>
			<?php echo deyan_view_icon('friends', 128); ?> <label> <?php echo elgg_echo('friends'); ?> </label>
		</li>
		
		<li>
			<?php echo deyan_view_icon('apps', 128); ?> <label> <?php echo elgg_echo('groups'); ?> </label>
		</li>
		
		<li>
			<?php echo deyan_view_icon('bookmarks', 128); ?> <label> <?php echo elgg_echo('bookmarks'); ?> </label>
		</li>
		
		<li>
			<?php echo deyan_view_icon('mail', 128); ?> <label> <?php echo elgg_echo('messages'); ?> </label>
		</li>
		
		<li>
			<?php echo deyan_view_icon('notepad', 128); ?> <label> <?php echo elgg_echo('blog'); ?> </label>
		</li>
	</ul>
</div>
