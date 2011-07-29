<?php

require_once 'application/controller.php';
require_once 'application/model.php';
require_once 'application/view.php';

// determine what needs to be loaded and start appropriate controller and action (for the moment just the basic one)
$c = new Controller();
$c->index();
