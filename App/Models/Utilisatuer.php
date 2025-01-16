<?php
 namespace App\Models;
    include_once __DIR__ . "/../DAO/Dao.php";
 class Utilisatuer {
    protected int $id;
    protected string $nom ;
    protected string $prenom ;
    protected string $email;
    protected string $password;
    protected  Cours $cours;
    protected Role $role;

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
    public function setRole(Role $role):void{
        $this->role =  $role ;
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
    public function getRole():Role  {
        return $this->role;
    }
   

public function __tostring(): string{
    return  "id: " .$this->id. " , nom: " .$this->nom . " , prenom: "
    .$this->prenom . " , email: " .$this->email . " , password: " .$this->password . ",cours:" .$this->cours;
}

 }

?>
