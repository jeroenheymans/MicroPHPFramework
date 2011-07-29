<?php
/**
 * Basic view class
 * 
 * @author Jeroen Heymans
 */
class IndexView extends View {
	
	public function index(Model $m) {
		echo '<h1>'.$m->introText.'</h1>';
	}
	
}
