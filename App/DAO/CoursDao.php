<?php

class CoursDao{
    public function create(cours $cours):Cours{
     if (empty($cours->getNom() || $cours->getNom() == null))
     {
        $cours->setNom("default Nom");
     }
     if (empty($cours->getDescription() || $cours->getDescription() == null)){
        $cours->setDescription("default Description");
     }
     if (empty($cours->getContenu() || $cours->getContenu() == null)){
        $cours->setContenu("default Contenu")
     }
     return $cours
    }
}




?>