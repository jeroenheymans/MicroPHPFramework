<?php
/**
 * Basic view class
 *
 * This requires that the programmer provides an index-method
 * that will be used for the index pages of a controller.
 * 
 * @author Jeroen Heymans
 */
abstract class View {
	
	public abstract function index(Model $m);
	
}
