<?php
namespace App\ImcModele;

class ImcModele {
    public function calculerImc($poids, $taille) {
        if ($taille > 0) {
            return round($poids / ($taille * $taille), 2);
        }
        return "Taille incorrecte";
    }
}
?>
