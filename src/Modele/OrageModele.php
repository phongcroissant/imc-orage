<?php
namespace App\Controllers;

use App\Modele\OrageModele;

class OrageController {
    public function requete() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $temps = $_POST['temps'];

            // Instancier le modèle et calculer la distance
            $model = new OrageModele();
            $distance = $model->calculerDistance($temps);

            // Passer la variable $distance à la vue
            require __DIR__ . '/../../views/resultatView.php';
        } else {
            // Afficher le formulaire
            require __DIR__ . '/../../views/orageVue.php';
        }
    }
}
?>