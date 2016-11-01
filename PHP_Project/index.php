<?php
// Include Config
require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

// controllers
require('controllers/home.php');
require('controllers/users.php');
require('controllers/shares.php');

// Models
require('models/home.php');
require('models/user.php');
require('models/share.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
  $controller->executeAction();
}
