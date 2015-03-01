<?php
	require_once(__DIR__."/../config/config.php");
	$params = explode("/", $_SERVER['REQUEST_URI']);
	
	$app = new Application();
	$class = (!empty($params[$config['url_offset'] + 1]))? ucfirst(strtolower($params[$config['url_offset'] + 1])) : $config['default_class'];
	$method = (!empty($params[$config['url_offset'] + 2]))? strtolower($params[$config['url_offset'] + 2]) : $config['default_method'];
	if(in_array($class, $config['safe_pages'])){
		$app->loadController($class);
		if(method_exists($class."Controller", $method)){
			$app->method($method);
		}else{
			echo "method doesn't exist";
		}
	}else{
		echo "404";
	}
	
?>