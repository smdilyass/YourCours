<?php

namespace App\Models;





class UtilisateurControllers
{
    public function __construct()
    {
    }

    public function index()
    {
        echo "UtilisateurControllers";
    }
}



echo "<br>";
echo "<br>";
echo "<br>";

$user = new Utilisateur();
echo $user->getId();





?>