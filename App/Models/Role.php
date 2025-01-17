<?php
namespace App\Models;
class Role {
    private int $id;
    private string $role_name;
    private string $role_description = "";
    private string $logo = "";

    public function __construct () {}


    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setRoleName(string $role_name) : void {
        $this->role_name = $role_name;
    }

    public function setDescription(string $description) : void {
        $this->role_description = $description;
    }

    public function setLogo(string $logo): void {
        $this->logo = $logo;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getRoleName() : string {
        return $this->role_name;
    }

    public function getDescription(): string {
        return $this->role_description;
    }

    public function getLogo(): string {
        return $this->logo;
    }

    public function __toString() {
        $id = $this->id ?? 0;
        $name = $this->role_name ?? "";
        $description = $this->role_description ?? "";
        $logo = $this->logo ?? "";

        return "(Role) => id : {$id} , name : '{$name}' , description : '{$description}' , logo : '{$logo}')";
    }
 public function createRole(Role $role):Role{
    if (empty($role->getDescription()) || $role->getDescription() == null) {
        $role->setDescription("default Description");
    }

    if (empty($role->getLogo()) || $role->getLogo() == null) {
        $role->setLogo("Default logo");
    }
    $query = "INSERT INTO role (nom , description ,logo)VALUES ('" . $role->getRoleName() . "','" . $role->getDescription() . "','" . $role->getLogo() . "');";
    $stmt = Database::getInstance()->getConnection()->prepare($query);
    $stmt->execute();

    $role->setId(Database::getInstance()
        ->getConnection()
        ->lastInsertId());    

     return $role;
    }
    public function updateRole(Role $role):void{

        $query = "UPDATE role SET ";
    }

    public function deleteRole(Role $role):Role{
        $role->setRoleName("deleted Role");
        return $role;
    }

    // public function getRoleById(int $id):Role{
    //     $role = new Role();
    //     $role->setId($id);
    //     $role->setRoleName("Role Name");
    //     $role->setDescription("Role Description");
    //     $role->setLogo("Role Logo");
    //     return $role;
    // }

    // public function getRoleByName(string $name):Role{
    //     $role = new Role();
    //     $role->setId(1);
    //     $role->setRoleName($name);
    //     $role->setDescription("Role Description");
    //     $role->setLogo("Role Logo");
    //     return $role;
    // }
    
}