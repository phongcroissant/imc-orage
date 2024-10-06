<?php
namespace App\Controllers;

use App\ImcModele\ImcModele;

class ImcController {
    public function requete() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $poids = $_POST['poids'];
            $taille = $_POST['taille'];

            $model = new ImcModele();
            $imc = $model->calculerImc($poids, $taille);

            // Passer la variable $imc à la vue
            require __DIR__ . '/../Views/resultatVue.php';
        } else {
            // Afficher le formulaire pour saisir les données
            require __DIR__ . '/../Views/imcVue.php';
        }
    }
}
?>
