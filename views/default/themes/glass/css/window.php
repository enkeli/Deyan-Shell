<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @theme glass
 * @css window
 *
 * This file holds the styles for the windows
 * 
 **/ 
?> 

/*******************************
*       TITLE BAR(header)      *
/******************************/
.deyan-titlebar-right{
      float: right;
      width: 250px;
      text-align: right;
}

.deyan-titlebar-right .deyan-icon-close{
      background: #e55 url(<?php echo $vars['theme']['url']; ?>images/base.png);
      width: 30px;
      height: 20px;      
      opacity: .7;
      border-bottom: 1px solid <?php echo $vars['theme']['border']; ?>;
      border-left: 1px solid <?php echo $vars['theme']['border']; ?>;
      border-radius: 0 0 0 5px;
      color: #fff;
	text-align: center;
	font-size: 20px;
	font-weight: bold;
}

.deyan-titlebar-right .deyan-icon-close:hover{
	box-shadow: -1px 1px 5px #e00;	
	opacity: 1;
}
.deyan-titlebar-right .deyan-icon-close:before {
	content: "x";
}

.deyan-titlebar-middle{
      float: right;
      width: 490px;
      text-align: center;
      text-shadow: 0px 0px 5px #333;
      color: #fff;
      font-weight: bold;
      padding: 3px 0 0 0; 
      cursor: pointer;
}

.deyan-titlebar-left{
      width: 250px;
      text-align: left;
}

/*******************************
*       STATUS BAR(footer)     *
/******************************/
.elgg-page-default .elgg-page-footer > .elgg-inner  .elgg-menu-hz{
      float: right;
}


