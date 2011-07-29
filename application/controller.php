<?php
/**
 * Basic controller class
 * 
 * @author Jeroen Heymans
 */
abstract class Controller {
	
	protected $model = null;
	protected $view = null;
	
	public function __construct() {
		$this->model = null;
		$this->view = null;
	}
	
	/**
	 * Indexpage that acts as a fallback when giving a controller 
	 * but not a specific page. For example:
	 * - "user/view" will call UserController with action view
	 * - "user" will call UserController with action index
	 */
	public function index() {
		$this->view->index($this->model);
	}
	
}
