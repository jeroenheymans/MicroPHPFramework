<?php

require_once 'application/controller.php';
require_once 'application/model.php';
require_once 'application/view.php';

// determine what needs to be loaded and start appropriate controller (for the moment just the basic one)
new Controller()->home();
