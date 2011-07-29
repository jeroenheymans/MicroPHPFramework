<?php
/**
 * Basic view class
 * 
 * @author Jeroen Heymans
 */
abstract class View {
	
	public function index(Model $m) {
		echo $m->introText;
	}
	
}
