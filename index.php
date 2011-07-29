<?php
/**
 * MicroPHPFramework by Jeroen Heymans
 *
 * @author Jeroen Heymans
 */
 
/**
 * Display all errors
 * Disable this in a live environment!
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');

/**
 * Basic files for our app
 */
require_once 'application/controller.php';
require_once 'application/model.php';
require_once 'application/view.php';

// determine what needs to be loaded and start appropriate controller and action (for the moment just the basic one)
// TODO: require_once the correct controller and call the correct action

require_once 'controllers/index.php';
$c = new IndexController();
$c->index();
