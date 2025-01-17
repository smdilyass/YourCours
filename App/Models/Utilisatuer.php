<?php
 namespace App\Models;

use PDO;

 class Utilisateur {
    protected int $id;
    protected string $nom ;
    protected string $prenom ;
    protected string $email;
    protected string $password;
    // protected  Cours $cours;
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
    // public function setCours(Cours $cours):void{
    //     $this->cours = $cours;
    // }
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

    //    public function getCours() : Cours {
    //     return $this->cours;
    // }
    public function getRole():Role  {
        return $this->role;
    }
   

public function __tostring(): string{
    return  "id: " .$this->id. " , nom: " .$this->nom . " , prenom: "
    .$this->prenom . " , email: " .$this->email . " , password: " .$this->password . ",role:" .$this->getRole();
}

public function create(Utilisateur $user): Utilisateur{
    $query = "INSERT INTO utilisateurs (nom, prenom, email, password , role_id ) VALUES ( '". $user->getNom() . "' , '" . $user->getPrenom() . "' , '". $user->getEmail() . "' , '" . $user->getPassword() . "', ". $user->getRole()->getId() .  ");" ;

    $stmt = Database::getInstance()->getConnection()->prepare($query);
    $stmt->execute();

    $user->setId(Database::getInstance()
        ->getConnection()
        ->lastInsertId());

    return $user;
}

public function delete(int $id) : int {
    $query = "DELETE FROM utilisateurs WHERE id = " . $id . " ;";

    $statement = Database::getInstance()->getConnection()->prepare($query);
    $statement->execute();

    return $statement->rowCount();
}

public function update(Utilisateur $user) : Utilisateur {
    $query = "UPDATE utilisateurs SET firstname = '" . $user->getNom() . "' , lastname = '" . $user->getPrenom() . "' , email = '" . $user->getEmail() . "', password = '" . $user->getPassword() . "' , role_id = " . $user->getRole()->getRoleName() . " WEHRE id = ". $user->getId() . ";";
    
    $statement = Database::getInstance()->getConnection()->prepare($query);
    $statement->execute();

    return $user;
}

public function findAll() : array {
    $query = "SELECT * FROM utilisateurs";

    $statement = Database::getInstance()->getConnection()->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, Utilisateur::class);
}

public function findById(int $id) : Utilisateur {
    $query = "SELECT * FROM utilisateurs WHERE id = " . $id;

    $statement = Database::getInstance()->getConnection()->prepare($query);
    $statement->execute();

    return $statement->fetchObject(Utilisateur::class);
}






 }

?>
