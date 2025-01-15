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
}

?>