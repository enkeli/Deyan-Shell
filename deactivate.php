 <?php
 

	// Default icon library
	elgg_unset_plugin_setting('icons', 'deyan');
	
	// Icon Sizes
	$sizes = array(16, 32, 64, 128);
	foreach ($sizes as $size) {
	elgg_unset_plugin_setting("iconadmin_{$size}x{$size}", 'deyan');
	}
	// Default theme
	elgg_unset_plugin_setting('theme', 'deyan');
	