<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @theme glass
 * @css modules
 * 
 **/ 
?>
/* ***************************************
	Modules
*************************************** */
.elgg-module {
	margin-bottom: 20px;
}

/* Aside */
.elgg-module-aside{
	border: 2px solid <?php echo $vars['theme']['border']; ?>;
	margin: 10px;
	border-radius: 5px;
	background: <?php echo $vars['theme']['window_module']; ?>;
	padding: 5px;
}
.elgg-module-aside .elgg-head {
	padding-bottom: 5px;
}
.elgg-module-aside .elgg-head *{
	color: #fff;
	text-shadow: 0 0 5px #000;
	text-align: center;
}

/* Info */
.elgg-module-info > .elgg-head {
	background: <?php echo $vars['theme']['window_module']; ?>;
	padding: 5px;
	margin-bottom: 10px;
	border-radius: 3px;
	box-shadow: 5px 5px 1px <?php echo $vars['theme']['window_background']; ?>
}


/* Popup */
.elgg-module-popup {
	background-color: white;
	border: 1px solid #ccc;
	
	z-index: 9999;
	margin-bottom: 0;
	padding: 5px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	
	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #0054A7;
}

/* Dropdown */
.elgg-module-dropdown {
	background-color:white;
	border:5px solid #CCC;
	
	-webkit-border-radius: 5px 0 5px 5px;
	-moz-border-radius: 5px 0 5px 5px;
	border-radius: 5px 0 5px 5px;
	
	display:none;
	
	width: 210px;
	padding: 12px;
	z-index:999;
	
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	
	position:absolute;
	right: 0px;
	top: 100%;
}

/* Featured */
.elgg-module-featured {
	border: 1px solid #4690D6;
	
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.elgg-module-featured > .elgg-head {
	padding: 5px;
	background-color: #4690D6;
}
.elgg-module-featured > .elgg-head * {
	color: white;
}
.elgg-module-featured > .elgg-body {
	padding: 10px;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 5px 5px 15px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: <?php echo $vars['theme']['window_background']; ?>;
	border: 3px solid <?php echo $vars['theme']['border']; ?>;
	text-shadow: 0px 0px 5px #fff;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 10px 10px;
	width: 100px;
	height: 100px;
	padding: 4px;
	background: <?php echo $vars['theme']['unaviable']; ?>;
	border: 3px solid <?php echo $vars['theme']['border']; ?>;
	font-weight: bold;
	text-shadow: none;
	text-align: center;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: <?php echo $vars['theme']['unaviable']; ?>;
	background: <?php echo $vars['theme']['aviable']; ?>;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background: <?php echo $vars['theme']['hover']; ?>;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: <?php echo $vars['theme']['aviable']; ?>;
}

.elgg-module-widget {
	margin: 0 5px 15px;
	position: relative;
	border: 3px solid <?php echo $vars['theme']['border']; ?>;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.elgg-module-widget:hover {
}
.elgg-module-widget > .elgg-head {
	background: <?php echo $vars['theme']['window_background']; ?>;
	height: 26px;
	overflow: hidden;
}
.elgg-module-widget > .elgg-head h3 {
	text-align: center;
	text-shadow: 0px 0px 5px #111;
	padding: 4px 45px 0 20px;
	color: #fff;
	
}
.elgg-module-widget.elgg-state-draggable > .elgg-head {
	cursor: move;
}
.elgg-module-widget > .elgg-head a {
	position: absolute;
	top: 1px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}
a.elgg-widget-collapse-button {
	background: url(<?php echo $vars['theme']['url']; ?>images/base.png);
	color: #fff;
	margin: -1px 0 0 0;
	opacity: .7;
	text-align: center;
	font-size: 25px;
	font-weight: bold;
	
	-webkit-border-radius: 0 0 5px 0;
	-moz-border-radius: 0 0 5px 0;
	border-radius: 0 0 5px 0;
	
	border-bottom: 1px solid <?php echo $vars['theme']['border']; ?>;
	border-right: 1px solid <?php echo $vars['theme']['border']; ?>;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	background: #58d url(<?php echo $vars['theme']['url']; ?>images/base.png);
	text-decoration: none;
	opacity: 1;
	box-shadow: -1px 1px 5px #58d;
}
a.elgg-widget-collapse-button:before {
	content: "-";
}
a.elgg-widget-collapsed:before {
	content: "+";
}
a.elgg-widget-delete-button {
	right: 5px;
}
a.elgg-widget-edit-button {
	right: 25px;
}
.elgg-module-widget > .elgg-body {
	background: <?php echo $vars['theme']['window_main']; ?>;
	width: 100%;
	overflow: hidden;
	border-top: 2px solid <?php echo $vars['theme']['border']; ?>;
}
.elgg-widget-edit {
	display: none;
	width: 96%;
	padding: 2%;
	border-bottom: 2px solid <?php echo $vars['theme']['border']; ?>;
}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-placeholder {
	border: 2px dashed <?php echo $vars['theme']['border']; ?>;
	margin-bottom: 15px;
}