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

  public function query($query){
    $this->statement = $this->dbHandler->prepare($query);
  }

  public function bind($param, $value, $type=null){
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;

          case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;

          case is_null($value):
          $type = PDO::PARAM_NULL;
          break;

          default:
          $type = PDO::PARAM_STR;
      }
    }

    $this->statement->bindValue($param, $value, $type);
  }

  public function execute()
  {
    return $this->statement->execute();
  }

  public function lastInsertId()
  {
    $this->dbHandler->lastInsertId();
  }

  public function resultset()
  {
    $this->execute();

    return $this->statement->fetchAll(PDO::FETCH_ASSOC);
  }

}



?>
