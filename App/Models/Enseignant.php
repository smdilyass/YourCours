<?php
namespace App\Models;
include "./Utilisatuer.php";


class Enseignant extends Utilisateur
{
    private string $specialite;

    public function __construct()
    {
    }

    public function setSpecialite(string $specialite): void
    {
        $this->specialite = $specialite;
    }

    public function getSpecialite(): string
    {
        return $this->specialite;
    }

    public function __toString(): string
    {
        return "id: " . $this->id . " , nom: " . $this->nom . " , prenom: " . $this->prenom . " , email: " . $this->email . " , password: " . $this->password . " , specialite: " . $this->specialite;
    }
}