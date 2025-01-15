<?php

class CoursDao{
    public function create(cours $cours):Cours{
     if (empty($cours->getNom()) || $cours->getNom() == null)
     {
        $cours->setNom("default Nom");
     }
     if (empty($cours->getDescription()) || $cours->getDescription() == null)
     {
        $cours->setDescription("default Description");
     }
     if (empty($cours->getContenu()) || $cours->getContenu() == null){
        $cours->setContenu("default Contenu");
    }
     if (empty($cours->getEnseignant()) || $cours->getEnseignant() == null)
     {
        $defaultEnseignant = new Enseignant();
        $defaultEnseignant->setNom("default Enseignant");
        $cours->setEnseignant($defaultEnseignant);
     }
     return $cours;
    }
}




?>