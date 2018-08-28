<?php

namespace Alfa;
ini_set('display_errors',1); ini_set('display_startup_erros',1); error_reporting(E_ALL);


use Alfa\Config;
use Alfa\Base;

class Wrapper {

    public $dbh;

    public function __construct() {
        $config = new Config('mysql', 'localhost', 80, 'turma3', 'root', '20ver6web', '');
        $this->dbh = new Base($config);
    }

    public function __destruct() {
        $this->dbh->disconnects();
    }

    public function addCategory($category) {
        $sql = "INSERT INTO categoria (nome) VALUES (:categoria)";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':categoria', $category, \PDO::PARAM_STR);
        $stmt->execute();
    }

    public function editCategory($id, $name) {
        $sql = "UPDATE categoria SET nome = :nome WHERE id = :id LIMIT 1";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':nome', $name, \PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
    }

    public function searchCategory($id) {
        $sql = "SELECT * FROM categoria WHERE id = :id LIMIT 1";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function listCategory() {
        $sql = "SELECT * FROM categoria";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function deleteCategory($id) {
        $sql = "DELETE FROM categoria WHERE id = :id LIMIT 1";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
    }
}