<?php
/**
 * Basic view class
 * 
 * @author Jeroen Heymans
 */
class View {
	
	public function render(Model $m) {
		echo $m->introText;
	}
	
}
