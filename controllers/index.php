<?php
require_once 'views/index.php';

class IndexController extends Controller {

	public function __construct() {
		$this->view = new IndexView();
	}

	public function index() {
		echo 'Second Hello World!';
	}
	
}
