<?php
 namespace App\Models;

use PDO;

 class Utilisateur {
    protected int $id;
    protected string $nom ;
    protected string $prenom ;
    protected string $email;
    protected string $password;

    protected Role $role;

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

   
    public function getRole():Role  {
        return $this->role;
    }

   
    public function login (string $email, string $password): Utilisateur {
        $query = "SELECT * FROM utilisateurs WHERE email = :email AND password = :password;";

        $statement = Database::getInstance()->getConnection()->prepare($query);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->execute();

        return $statement->fetchObject(Utilisateur::class);
    }
   

public function __tostring(): string{
    return  "id: " .$this->getId(). " , nom: " .$this->getNom() . " , prenom: "
    .$this->getPrenom() . " , email: " .$this->getEmail() . " , password: " .$this->getPassword() . ",role:" .$this->getRole();
}

public function delete(int $id) : int {
    $query = "DELETE FROM utilisateurs WHERE id = :id;";

    $statement = Database::getInstance()->getConnection()->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    return $statement->rowCount();
}

public function findAll() : array {
    $query = "SELECT * FROM utilisateurs";
    
    $statement = Database::getInstance()->getConnection()->prepare($query);
    $statement->execute();
    
    return $statement->fetchAll(PDO::FETCH_CLASS, Utilisateur::class);
}
    public function findById(int $id) : Utilisateur {
    $query = "SELECT * FROM utilisateurs WHERE id = :id";
    
    $statement = Database::getInstance()->getConnection()->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    
    return $statement->fetchObject(Utilisateur::class);
}


}



?>
