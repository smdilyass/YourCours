<?php
 
 class Utilisatuer {
    private int $id;
    private string $nom ;
    private string $prenom ;
    private string $email;
    private string $password;
    private  Cours $cours;

    public function __construct(){}
    public function setId(int $id):void{
        $this->id = $id;
    }
    public function setNom(string $nom):void{
        $this->nom = $nom;
    }
    public function setPrenom(string $prenom):void{
        $this->prenom = $prenom;
    }
    public function setEmail(string $email):void{
        $this->email = $email;
    }
    public function setPassword(string $password):void{
        $this->password = $password;
    }
    public function setCours(Cours $cours):void{
        $this->cours = $cours;
    }

    public function getId() : int {
        return $this->id;
    } 
       public function getNom() : string {
        return $this->nom;
    }
    public function getPrenom() : string {
        return $this->prenom;
    } 
      
    public function getEmail() : string {
        return $this->email;
    } 
       public function getPassword() : string {
        return $this->password;
    } 
       public function getCours() : Cours {
        return $this->cours;
    }
   

public function __tostring(): string{
    return  "id: " .$this->id. " , nom: " .$this->nom . " , prenom: "
    .$this->prenom . " , email: " .$this->email . " , password: " .$this->password . ",cours:" .$this->cours;
}

 }

?>
