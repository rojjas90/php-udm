<?php
class First{

  public $id =23;
  protected $name = 'Rojas';

  public function saySomething($word)
  {
    // echo 'Something...';
    echo $word;
  }
}


class Second extends First
{
  public function getName()
  {
    echo $this->name;
  }
}

$second = new Second;

// echo $second->name;
// echo $second->saySomething('Hello!');

// echo $second->name; //wrong because is protected property
echo $second->getName();
 ?>
