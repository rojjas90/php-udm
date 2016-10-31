<?php
class Database{
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '123456';
  private $dbName = 'myblog';

  private $dbHandler;
  private $error;
  private $statement;

  public function __construct()
  {
    //Set DSN
    $dsn = 'mysql:host='.$this->host.'; dbname='.$this->dbName;

    //Set options
    $options = array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    // Create new PDO
    try {
      $this->dbHandler =  new PDO($dsn, $this->user, $this->pass, $options);

    } catch (PDOEception $e) {
      $this->error = $e-> getMessage();
    }
  }

}



?>
