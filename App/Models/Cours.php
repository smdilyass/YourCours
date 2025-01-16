<?php

namespace App\Models;
include_once __DIR__ . "/../Models/Enseignant.php";
use BadMethodCallException;
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
     public function setNom(string $nom):void{
      $this->nom = $nom;
     }
   public function setDescription(string $description): void {
      $this->description = $description;
   }

   public function setContenu(string $contenu): void {
      $this->contenu = $contenu;
   }

   public function setEnseignant(enseignant $enseignant): void {
      $this->enseignant = $enseignant;
   }
   public function getId(): int {
      return $this->id;
   }
   public function getNom(): string {
      return $this->nom;
   }

   public function getDescription(): string {
      return $this->description;
   }

   public function getContenu(): string {
      return $this->contenu;
   }

   public function getEnseignant(): enseignant {
      return $this->enseignant;
   }
   public function __call($name, $arguments) {
      if (method_exists($this, $name)) {
         return call_user_func_array([$this, $name], $arguments);
      } else {
         throw new BadMethodCallException("Method $name does not exist");
      }
   }
   public function createCours(Cours $cours):Cours{
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
      $query = "INSERT INTO cours (nom, description, contenu, enseignant) VALUES ('". $cours->getNom."' , '".$cours->getDescription."' , '".$cours->getContenu."' , ".$cours->getEnseignant.");";
      return $cours;
     }
     public function updateCours(cours $cours):Cours{
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
         $query = "UPDATE cours SET nom = '". $cours->getNom .
         "' , description = '" . $cours-> getdescription . "' , contenu = '" . $cours->getContenu . "', enseignant = '" . $cours->getEnseignant . "' , WHERE id = ". $cours->getId .";'";
         return $cours;
     }
       public function deleteCours(cours $cours):Cours{
          $query = "DELETE FROM cours WHERE id = ". $cours->getId() .";";
          return $cours;
       }
 
       public function getCoursById($id): Cours {
          $query = "SELECT * FROM cours WHERE id = ". $id .";";
          $cours = new Cours();
          $cours->setId($id);
          $cours->setNom("Nom");
          $cours->setDescription("Description");
          $cours->setContenu("Contenu");
          $enseignant = new Enseignant();
          $enseignant->setNom("Enseignant");
          $cours->setEnseignant($enseignant);
          return $cours;
       }
       public function getAllCours(): array {
          $query = "SELECT * FROM cours;";
          $cours = array();
          for ($i = 0; $i < 10; $i++) {
             $cours[$i] = new Cours();
             $cours[$i]->setId($i);
             $cours[$i]->setNom("Nom");
             $cours[$i]->setDescription("Description");
             $cours[$i]->setContenu("Contenu");
             $enseignant = new Enseignant();
             $enseignant->setNom("Enseignant");
             $cours[$i]->setEnseignant($enseignant);
          }
          return $cours;
       }

}

$test = new Cours();
// $test->setId(1);
// $test->setNom("test");
// $test->setDescription("test");
// $test->setContenu("test");
$test->setEnseignant(new Enseignant());
// $test->getNom();
// $test->getDescription();
// $test->getContenu();
// $test->getEnseignant();
// $test->getId();
var_dump($test);

?>