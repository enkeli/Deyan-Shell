<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/css/misc
 * This file contains miscelaneous style.
 * 
 **/ 
?>  

/* ***************************************
	BACKGROUND
*****************************************/
body {
	background: <?php echo $vars['theme']['background']; ?>;
}

/* ***************************************
	AVATAR Panel
*****************************************/
.deyan-panel-avatar {
	width: 30px;
	height: 30px;
	border-radius: 5px;
	margin-top: -8px; 
}

/* ***************************************
	XOR SELECTOR
*****************************************/
.deyan-xor-selector li {
	float: left;
	margin: 10px;
	text-align: center;
	cursor: pointer;
}
.deyan-xor-selector img {
	border-radius: 10px;
	width: 128px;
	height: 128px;
	cursor: pointer;
}

/* ***************************************
	Header Replacement 
*****************************************/
.deyan-header-replacement{
      margin-top: 50px;
}

/* ***************************************
	INDEX
*****************************************/
.deyan-index {
	margin-top: 150px;
}
.deyan-index li {
	float: left;
	padding: 25px;
}
.deyan-index label {
	display: none;
	position: absolute;
	top: 100px;
	left: 38%;
	font-weight: bold;
	font-size: 40px;
	text-align: center;
	color: #eee;
	padding: 20px;
	width: 250px;
	border-radius: 46px;
	border: 5px dotted #aaa;
}
.deyan-index span {

	border: 5px dotted transparent;
	border-radius: 46px;
}
.deyan-index li:hover span {

	border: 5px dotted #aaa;

}
.deyan-index li:hover label {
	display: block;
}


