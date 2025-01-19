<?php
namespace App\Models;


abstract class Etiquette 
{
    protected int $id ;
    protected string $name ;
    protected string $description ;
    protected string $logo ;

    public  function __construct(){}

// public static function create(array $data):Etiquette{
//     $etiquette = new Etiquette();
//     $etiquette->setName($data['name']);
//     $etiquette->setDescription($data['description']);
//     $etiquette->setLogo($data['logo']);
//     return $etiquette;
// }




    public function setID(int $id): void 
    {
        $this->id = $id;
    }

    public function setName(string $name): void 
    {
        $this->name = $name;
    }
    public function setDescription(string $description): void 
    {
        $this->description = $description;
    }
 public function setLogo (string $logo):void{
    $this->logo =$logo;
 }

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string 
    {
        return $this->name;
    }
    public function getDescription(): string 
    {
        return $this->description;
    }
public function getLogo():string{
    return $this->logo;
}

    public function __toString(): string
    {
        return "id: {$this->id}, name: {$this->name}, description: {$this->description}, logo: {$this->logo}.";
    }

    public function createEtiquette(Etiquette $etiquette):Etiquette{
        if (empty($etiquette->getName()) || $etiquette->getName() == null)
        {
            $etiquette->setName("default Name");
        }
        if (empty($etiquette->getDescription()) || $etiquette->getDescription() == null)
        {
            $etiquette->setDescription("default Description");
        }
        if (empty($etiquette->getLogo()) || $etiquette->getLogo() == null)
        {
            $etiquette->setLogo("default Logo");
        }
        
        $query = "INSERT INTO etiquettes (name, description, logo) VALUES ('" . $etiquette->getName() . "', '" . $etiquette->getDescription() . "', '" . $etiquette->getLogo() . "');";
        // Execute the query here

        return $etiquette;
    }

    public function updateEtiquette(Etiquette $etiquette):Etiquette{
        if (empty($etiquette->getName()) || $etiquette->getName() == null)
        {
            $etiquette->setName("default Name");
        }
        if (empty($etiquette->getDescription()) || $etiquette->getDescription() == null)
        {
            $etiquette->setDescription("default Description");
        }
        if (empty($etiquette->getLogo()) || $etiquette->getLogo() == null)
        {
            $etiquette->setLogo("default Logo");
        }
        if (empty($etiquette->getID()) || $etiquette->getID() == null)
        {
            $etiquette->setID(1);
        }
        $qury = "UPDATE etiquettes SET name = '" . $etiquette->getName() . "', description = '" . $etiquette->getDescription() . "', logo = '" . $etiquette->getLogo() . "' WHERE id = " . $etiquette->getID() . ";";
        return $etiquette;
    }

    public function deleteEtiquette(Etiquette $etiquette):Etiquette{
        if (empty($etiquette->getName()) || $etiquette->getName() == null)
        {
            $etiquette->setName("default Name");
        }
        if (empty($etiquette->getDescription()) || $etiquette->getDescription() == null)
        {
            $etiquette->setDescription("default Description");
        }
        if (empty($etiquette->getLogo()) || $etiquette->getLogo() == null)
        {
            $etiquette->setLogo("default Logo");
        }
        if (empty($etiquette->getID()) || $etiquette->getID() == null)
        {
            $etiquette->setID(1);
        $query = "DELETE FROM etiquettes WHERE id = " . $etiquette->getID() . ";";
        $query = "DELETE FROM etiquettes WHERE name = '" . $etiquette->getName() . "';";
        }
    
        return $etiquette;
    }
}

?>