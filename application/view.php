<?php
/**
 * Basic view class
 * 
 * @author Jeroen Heymans
 */
class View {
	
	public function index(Model $m) {
		echo $m->introText;
	}
	
}
