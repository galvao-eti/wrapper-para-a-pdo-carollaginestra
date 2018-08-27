<?php
namespace Alfa;

class Base {

    public $dbh;

    public function __construct($config) {
        $this->connect($config->dsn, $config->user, $config->pass);
    }	

    public function connect($dsn, $user, $pass) {
        $this->dbh = new \PDO($dsn, $user, $pass);
    }

    public function prepare($sql) {
        return $sth = $this->dbh->prepare($sql);
    }
    
    public function disconnects() {
        $this->dbh = NULL;
    }
}