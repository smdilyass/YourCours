<?php


class Cours  {
    private  int $id;
    private string $nom;
    private string $description;
    private string $contenu;
    private  enseignant $enseignant;


     public function __construct (){} 
     public function setId(int $id) :void{
        $this->id = $id;
     }

}

?>