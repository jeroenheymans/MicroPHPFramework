<?php
require_once 'views/index.php';
require_once 'models/helloworld.php';

class IndexController extends Controller {

	public function __construct() {
		parent::__construct();
		$this->view = new IndexView();
		$this->model = new HelloWorldModel();
	}
	
}
