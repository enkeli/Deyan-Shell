 <?php
 

	// Default icon library
	elgg_set_plugin_setting('icons', 'gray', 'deyan');
	
	// Icon Sizes
	$sizes = array(16, 32, 64);
	foreach ($sizes as $size) {
	elgg_set_plugin_setting("iconadmin_{$size}x{$size}", 1,'deyan');
	}
	
	
	// Default theme
	elgg_set_plugin_setting('theme', 'glass', 'deyan');
	
	