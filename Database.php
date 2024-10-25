<?php

class Database {
  private $db;

  public function __construct($config)
  {
    $this->getDsn($config);
  }

  public function query($query, $class = null, $params = []) {
    $prepare = $this->db->prepare($query);

    if ($class) {
      $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
    }

    $prepare->execute($params);

    return $prepare;
  }

  private function getDsn($config) {
    $driver = $config['driver'];

    if ($driver == 'sqlite') {
      $dsn = $config['driver'] . ':database.sqlite';
      return $this->db = new PDO($dsn); 
    }

    $dsn = $config['driver'] . ':host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['database'] . ';charset=utf8mb4';
    
    return $this->db = new PDO($dsn, $config['user'], $config['password']);
  }
}

$database = new Database($config['database']);
