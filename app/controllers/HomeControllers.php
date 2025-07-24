<?php // controllers/HomeController.php
require_once 'models/TrajetModel.php';

$trajetModel = new TrajetModel();
$trajets = $trajetModel->getTrajetsDisponibles();

require 'views/home.php';
?>