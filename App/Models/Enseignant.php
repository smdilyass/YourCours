<?php


class Enseignant {

    private int $id ;
    private Utilisatuer $utilisatuer;



    public function __construct(){}


    

    public function setId(int $id): void 
    {
        $this->id = $id;
    }
    public function setUtilisatuer(Utilisatuer $utilisatuer): void{
        $this->utilisatuer = $utilisatuer;
    }

    public function getId(): int 
    {
        return $this->id;
    }
    public function getUtilisatuer():Utilisatuer
    {
        return $this::Utilisatuer;
    }



}