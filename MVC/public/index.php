<?php

require '../app/controllers/HomeController.php';
require '../app/models/User.php';

$controller = new HomeController();
$controller->index();
?>
