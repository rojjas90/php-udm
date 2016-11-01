<?php
// Include Config

// require('config.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');

// controllers
require('controllers/home.php');
require('controllers/users.php');
require('controllers/shares.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
  $controller->executeAction();
}
