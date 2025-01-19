use PHPUnit\Framework\TestCase;
use App\Models\Utilisateur;
use App\Models\Role;

<?php

class UtilisateurTest extends TestCase
{
    protected $user;

    protected function setUp(): void
    {
        $this->user = new Utilisateur();
    }

    public function testSetAndGetId()
    {
        $this->user->setId(1);
        $this->assertEquals(1, $this->user->getId());
    }

    public function testSetAndGetNom()
    {
        $this->user->setNom('Doe');
        $this->assertEquals('Doe', $this->user->getNom());
    }

    public function testSetAndGetPrenom()
    {
        $this->user->setPrenom('John');
        $this->assertEquals('John', $this->user->getPrenom());
    }

    public function testSetAndGetEmail()
    {
        $this->user->setEmail('john.doe@example.com');
        $this->assertEquals('john.doe@example.com', $this->user->getEmail());
    }

    public function testSetAndGetPassword()
    {
        $this->user->setPassword('password123');
        $this->assertEquals('password123', $this->user->getPassword());
    }

    public function testSetAndGetRole()
    {
        $role = new Role();
        $role->setId(1);
        $role->setRoleName('Admin');
        $this->user->setRole($role);
        $this->assertEquals($role, $this->user->getRole());
    }

    public function testToString()
    {
        $this->user->setId(1);
        $this->user->setNom('Doe');
        $this->user->setPrenom('John');
        $this->user->setEmail('john.doe@example.com');
        $this->user->setPassword('password123');
        
        $role = new Role();
        $role->setId(1);
        $role->setRoleName('Admin');
        $this->user->setRole($role);

        $expectedString = "id: 1 , nom: Doe , prenom: John , email: john.doe@example.com , password: password123,role:Admin";
        $this->assertEquals($expectedString, (string)$this->user);
    }
}
?>