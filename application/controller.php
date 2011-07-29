<?php
/**
 * Basic controller class
 * 
 * @author Jeroen Heymans
 */
class Controller {
	
	protected $model;
	protected $view;
	
	public function __construct() {
		$this->model = new Model();
		$this->view = new View();
	}
	
	public function home() {
		$this->view->render($this->model);
	}
	
}
