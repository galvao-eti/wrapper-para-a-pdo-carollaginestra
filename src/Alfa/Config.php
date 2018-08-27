<?php
namespace Alfa;

class Config {
	
	public $type, $host, $port, $base, $user, $pass, $dsn;
	
	public function __construct($type, $host, $port, $base, $user, $pass) {
		$this->type = $type;
		$this->host = $host;
		$this->port = $port;
		$this->base = $base;
		$this->user = $user;
		$this->pass = $pass;
		$this->dsn = "$type:host=$host;dbname=$base";
	}

}