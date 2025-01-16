<?php
namespace App\Models;


abstract class Etiquette 
{
    protected int $id ;
    protected string $name;
    protected string $description;
    protected string $logo;

    public function __construct(){}



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
        return "id: " .$this->id. " , name: " .$this->name. " , description: " .$this->description. " , logo:".$this->logo. ".";
    }
}