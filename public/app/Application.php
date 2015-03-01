<?php
class Application{
	private $controller;
	private $views;
	public function __construct(){
		$this->views = new Views();
	}
	
	public function loadController($controller){
		$this->controller = $controller;
		require_once($this->controller."Controller.php");
		$this->controller = $this->controller."Controller";
		$this->controller = new $this->controller();
	}
	
	public function method($function){
		$this->controller->$function();
	}
	
}
?>