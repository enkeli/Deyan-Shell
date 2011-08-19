<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @theme glass
 * @css navigation
 * 
 **/ 
?>

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 10px 0;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline;
	margin: 0 6px 0 0;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	
	padding: 2px 6px;
	color: #4690d6;
	border: 1px solid #4690d6;
	font-size: 12px;
}
.elgg-pagination a:hover {
	background: #4690d6;
	color: white;
	text-decoration: none;
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCCCCC;
	border-color: #CCCCCC;
}
.elgg-pagination .elgg-state-selected span {
	color: #555555;
	border-color: #555555;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	margin-bottom: 5px;
	border-bottom: 2px solid #cccccc;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 10px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 0 10px;
	text-align: center;
	height: 21px;
	color: #999;
}
.elgg-tabs a:hover {
	background: #dedede;
	color: #4690D6;
}
.elgg-tabs .elgg-state-selected {
	border-color: #ccc;
	background: white;
}
.elgg-tabs .elgg-state-selected a {
	position: relative;
	top: 2px;
	background: white;
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-weight: bold;
	line-height: 1.2em;
	color: #ccc;
	padding: 3px 0 0 0; 
	text-shadow: 0px 0px 5px #333;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after{
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #eee;
}
.elgg-breadcrumbs > li > a:hover {
	color: #fff;
	text-decoration: underline;
}

.elgg-main .elgg-breadcrumbs {
	position: relative;
	top: -6px;
	left: 0;
}


/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
}

.elgg-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}

/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	margin-bottom: 5px;
	display: table;
	width: 100%;
	padding: 5px 0 5px 0;
	background: <?php echo $vars['theme']['window_module']; ?>;
	border-radius: 5px;
	box-shadow: 5px 5px 1px <?php echo $vars['theme']['window_background']; ?>;
}
.elgg-menu-filter > li {
	float: left;
	background: transparent;
	margin: 0 0 0 10px;
}
.elgg-menu-filter > li:hover {
	background: <?php echo $vars['theme']['window_background']; ?>;
	border-radius: 5px;
}
.elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 0;
	text-align: center;
	height: 21px;
	color: white;
}
.elgg-menu-filter > li > a:hover {
	background: <?php echo $vars['theme']['window_background']; ?>;
	border-radius: 5px;
}
.elgg-menu-filter > .elgg-state-selected {
	background: <?php echo $vars['theme']['window_module']; ?>;
	border-radius: 5px;
}
.elgg-menu-filter > .elgg-state-selected > a {
	position: relative;
	font-weight: bold;
}
.elgg-menu-filter > .elgg-state-selected:hover {
	background: <?php echo $vars['theme']['window_module']; ?>;
}

/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page {
	margin-bottom: 15px;
	padding-left: 10px;
}

.elgg-menu-page a {
	display: block;
	color: white;
	text-shadow: 0px 0px 5px #fff;
	border-radius: 8px 0 0 8px;
	padding: 5px;
	border-top: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-bottom: 3px solid <?php echo $vars['theme']['border']; ?>;
	border-left: 3px solid <?php echo $vars['theme']['border']; ?>;
}
.elgg-menu-page a:hover {
	
	color: black;
	text-decoration: none;
	font-weight: bold;
}
.elgg-menu-page li.elgg-state-selected > a {
	background-color: <?php echo $vars['theme']['border']; ?>;
	color: black;
	font-weight: bold;
	border: none;
	padding: 10px;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;

	width: 165px;
	border: solid 1px;
	border-color: #E5E5E5 #999 #999 #E5E5E5;
	background-color: #FFF;
	
	-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #ddd;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 2px 8px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	background: #ccc;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
	color:#fff;
}

.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 4px;
}

.elgg-menu-footer-default {
	float: right;
}

.elgg-menu-footer-alt {
	float: left;
}

/* ***************************************
	ENTITY
*************************************** */
<?php // height depends on line height/font size ?>
.elgg-menu-entity {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-entity > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a {
	color: #aaa;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-entity > li > a {
	display: block;
}
.elgg-menu-entity > li > span {
	vertical-align: baseline;
}

/* ***************************************
	OWNER BLOCK
*************************************** */

.elgg-menu-owner-block{
	padding-left: 10px;
}
.elgg-menu-owner-block li a {
	display: block;
	color: black;
	text-shadow: 0px 0px 5px #fff;
	padding: 5px;
	border-radius: 8px 0 0 8px;	
	border-top: 1px solid rgba(255, 255, 255, .7);
	border-bottom: 1px solid rgba(255, 255, 255, .7);
	border-left: 1px solid rgba(255, 255, 255, .7);
}
.elgg-menu-owner-block li a:hover {
	color: black;
	text-decoration: none;
	font-weight: bold;
}
.elgg-menu-owner-block li.elgg-state-selected > a {
	background-color: #fff;
	color: black;
	font-weight: bold;
	border-top: 6px solid rgba(255, 255, 255, 1);
	border-bottom: 6px solid rgba(255, 255, 255, 1);
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}

/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-river > li {
	display: inline-block;
	margin-left: 5px;
}
.elgg-menu-river > li > a {
	color: #aaa;
	height: 16px;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-river > li > a {
	display: block;
}
.elgg-menu-river > li > span {
	vertical-align: baseline;
}

/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin-bottom: 15px;
}