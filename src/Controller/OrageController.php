<?php
namespace App\Modele;

class OrageModele {
    public function calculerDistance($temps) {
        // La vitesse du son est d'environ 343 m/s
        $vitesseSon = 343;

        // Calcul de la distance (distance = temps * vitesse du son)
        return round($temps * $vitesseSon, 2);
    }
}
?>