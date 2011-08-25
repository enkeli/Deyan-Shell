<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @theme glass
 * @css layout
 * 
 **/ 
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	background: <?php echo $vars['theme']['window_background']; ?>;
	width: 990px;
	height: 25px;
	margin: 60px auto 0 auto;
	border-top: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-left: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-right: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-radius: 5px 5px 0 0;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	background: transparent;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	background: <?php echo $vars['theme']['window_background']; ?>;
	width: 990px;
	height: 25px;
	margin: 0 auto;
	text-shadow: 0px 0px 5px #fff;
	border-bottom: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-left: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-right: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-radius: 0 0 5px 5px;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: <?php echo $vars['theme']['panel_background']; ?>;
	border-bottom: 3px solid <?php echo $vars['theme']['border']; ?>;
	width: 100%;
	position: fixed;
	top: 0px;
	height: 35px;
	z-index: 9000;
	box-shadow: 0px 10px 5px <?php echo $vars['theme']['shadow']; ?>;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 35px;
	right: 20px;
	width: 300px;
	z-index: 9999;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: <?php echo $vars['theme']['window_background']; ?>;
	border-left: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-right: 3px solid <?php echo $vars['theme']['border']; ?>;
	width: 990px;
	margin-left: -3px;
	
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/two_sidebar_background.gif) repeat-y right top;
	border-left: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-right: 3px solid <?php echo $vars['theme']['border']; ?>;
	width: 990px;
	margin-left: -3px;
}
.elgg-sidebar {
	position: relative;
	float: left;
	width: 210px;
	margin: 0 0 0 0px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	background: <?php echo $vars['theme']['window_main']; ?>;
	position: relative;
	height: 490px;
	padding: 10px;
	overflow: auto;
	
}
.elgg-main > .elgg-head {
	padding: 3px;
	margin-bottom: 10px;
	background: <?php echo $vars['theme']['window_background']; ?>;
	border-radius: 5px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	color: #999;
	position: relative;
}
.elgg-page-footer a:hover {
	color: #666;
}