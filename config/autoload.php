<?php 

spl_autoload_register(function($class) {
	//namespace prefix
	$prefix = 'MVCCaramelo';

	//base dir
	$dir = 'app';

	//prefix verify
	$length = strlen($prefix);
	if(strncmp($prefix, $class, $length) != 0) {
		return;
	}

	//class name
	$relative_path = substr($class, $length);
	$file = $dir . str_replace('\\', '/', $relative_path) . '.php';
	$file_controller = $dir . str_replace('\\', '/', $relative_path) . 'Controller.php';

	//class require
	if(file_exists($file)) {
		require_once $file;
	} else if(file_exists($file_controller)) {
		require_once $file_controller;
	}
	
});