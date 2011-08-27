<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @language ES
 * Este archivo contiene el lenguaje en español para el plugin.
 * 
 **/ 


$spanish = array(
	      // // // // // // // // 
	      // 	ADMIN  
	      // // // // // // // // 
		      'admin:plugins:category:shell' => 'Shell',
		      'admin:appearance:icons' => 'Libreria de Iconos',
		      'admin:appearance:theme' => 'Tema',
		      
		      //Icons library
		      'deyan:icons:library:how' => '¿Como usar la libreria de iconos?',
		      'deyan:icons:library:use' => 'Solo usa la funcion: deyan_view_icon($icon, $size, $float); <br>
						    Donde: <br>
						    $icon  string El nombre del icono a mostrar (en esta pagina puedes encontrar una previsualizacion).<br>
						    $size  int    El tamaño del icono. Opciones: 16, 32, 64. Por defecto: 64.<br>
						    $float bool   Si quieres que el icono flote. Por defecto: false.',
		      
		      'deyan:icons:library:load' => '¿Que libreria quieres cargar?',
		      'deyan:icons:library:sizes' => '¿Que tamaños quieres cargar?',
		      'deyan:icons:library:preview' => 'Vista previa de ',
		      'deyan:icons:library:changed:default' => ' es ahora la libreria predeterminada.',
		      'deyan:icons:library:admin' => '¿Activar el selector de iconos para los usuarios?',
		      'deyan:icons:library:error' => 'El administrador ha desactivado la seleccion de iconos',
		      
		      //Theme
		      'deyan:theme:choose:default' => 'Elige el Tema por defecto:',
		      'deyan:theme:changed:default' => ' es ahora el Tema predeterminado.',
		      'deyan:theme:admin' => '¿Activar el selector de tema para los usuarios?',
		      'deyan:theme:error' => 'El administrador ha desactivado la seleccion de temas',
		      
		      //Shell Options
		      'deyan:scroll:admin' => '¿Dejar a los usuarios activar/desactivar las barras de desplazamiento?',
		      
		      
	      // // // // // // // // 
	      // 	Appearance 
	      // // // // // // // // 
		      'deyan:appearance' => 'Apariencia',
		      'deyan:personalize' => 'Personalizar',
		      
		      // Icon library
		      'deyan:icons' => 'Iconos',
		      'deyan:iconlib:choose' => 'Elige tu paquete de iconos',
		      'deyan:iconlib:changed' => ' es ahora tu paquete de iconos',
		      
		      // Themes
		      'deyan:theme' => 'Tema',
		      'deyan:theme:choose' => 'Elige tu Tema:',
		      'deyan:theme:changed' => ' es ahora tu Tema.',
		       
		      // Panel
		      'deyan:panel' => 'Panel',
		      'deyan:panel:general' => 'Opciones generales del Panel',
		      'deyan:panel:avatar' => 'Mostrar tu avatar en el menu de usuario.',
		      
		      // Custom Background
		      'deyan:background' => 'Personalizar Fondo',
		      'deyan:background:custom' => 'Usar fondo personalizado',
		      'deyan:background:url' => 'URL de la imagen de fondo:',
		      'deyan:background:fixed' => 'fijo',
		      'deyan:background:repeat' => 'repetir',
		      'deyan:background:repeat:none' => 'no repetir',
		      'deyan:background:repeat:x' => 'repetir x',
		      'deyan:background:repeat:y' => 'repetir y',
		       
		      // Scroll on windows
		      'deyan:scroll' => 'Barras de desplazamiento',
		      'deyan:scroll:use' => 'Activar barras de desplazamiento en las ventanas',

		      
		      
		      
	      // // // // // // // // 
	      // 	MISC 
	      // // // // // // // // 	
		      'deyan:register:welcome' => '¡Bienvenido! Esta es la pagina de registro. Una vez hayas completado el registro mandando tu formulario,
						    te enviaremos un e-mail de confirmacion con un link al que tienes que ingresar antes de poder iniciar sesion.',
		  
);

add_translation('es', $spanish);
