<?php
namespace App\Models;
include "./Utilisatuer.php";

class Etudiant extends Utilisateur {
    public function __construct(){}
}

$test = new Etudiant();
var_dump($test);