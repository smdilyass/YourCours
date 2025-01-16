<?php 
namespace App\DAO;

use \PDO;

class Dao {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
public function create($table, $data) {
    $columns = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));
    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $stmt = $this->pdo->prepare($sql);
    foreach ($data as $key => &$value) {
        $stmt->bindParam(":$key", $value);
    }
    return $stmt->execute();
}

public function find($table, $id) {
    $sql = "SELECT * FROM $table WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function update($table, $data, $id) {
    $setClause = "";
    foreach ($data as $key => $value) {
        $setClause .= "$key = :$key, ";
    }
    $setClause = rtrim($setClause, ", ");
    $sql = "UPDATE $table SET $setClause WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    foreach ($data as $key => &$value) {
        $stmt->bindParam(":$key", $value);
    }
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}

public function delete($table, $id) {
    $sql = "DELETE FROM $table WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}
}



?>