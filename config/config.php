<?php 
	//$root = "C:/xampp/htdocs/url/public/";
	$config['paths'] = array(__DIR__."/../public/app/", __DIR__."/../public/controllers/");
	$config['url_offset'] = 2;
	$config['default_method'] = 'index'; 
	$config['default_class'] = 'home';
	
	$config['safe_pages'] = array("Home", "Page");

	foreach($config['paths'] AS $value){
		set_include_path(get_include_path() . PATH_SEPARATOR . $value);
	}
	
	require_once("Application.php");
	require_once("Views.php");
?>