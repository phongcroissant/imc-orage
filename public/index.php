<?php


use App\Controller\ImcController;
use App\Controller\OrageController;

require_once __DIR__ . '/../vendor/autoload.php';

// Créer une instance du contrôleur
$controller = new ImcController();
$controller->requete();

$controller = new OrageController();
$controller->requete();
?>
