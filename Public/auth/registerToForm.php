<?php

    include_once "./../app/core/DataBase.php";
    include_once "./../app/controllers/EtudiantController.php";
    include_once "./../app/models/General.php";
    include_once "./../app/models/RoleModel.php";
    include_once "./../app/forms/RegisterControler.php";
    include_once "./../app/models/UserModel.php";
    include_once "./../app/models/EtudiantModel.php";

    include_once "./../app/controllers/EnseignantController.php";
    include_once "./../app/models/EnseignantModel.php";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $form = new RegisterControler($_POST['FirstName'], $_POST['LastName'], $_POST['email'], $_POST['role'], "suspension");
    }
    else{
        header("Location: pageRegister.php");
    }

    switch($form->role)
    {
        case 'Etudiant':
            try {
                $form->registerEtudiant();
            } catch (PDOException $e) {
                header("Location: pageRegister.php?email=existe");
            }
            break;
        case 'Enseignant':
            try {
                $form->registerEnseignant();
            } catch (PDOException $e) {
                header("Location: pageRegister.php?email=existe");
            }
            break;
    }



