<?php

class ShareModel extends Model {
  public function Index(){
    // return;

    $this->query('SELECT * FROM shares');
    $rows = $this->resultSet();

    // echo print_r($rows);

    return $rows;
  }
}
