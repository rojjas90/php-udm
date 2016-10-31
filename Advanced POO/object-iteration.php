<?php
class People{
  public $person1 = 'Rojas';
  public $person2 = 'Santos';
  public $person3 = 'Cadete';

  protected $person4 = 'Rangel';
  private $person5 = 'Mendez';

  function iterateObject()
  {
    foreach($this as $key => $value){
      print "$key => $value\n";
    }
  }
}


$people = new People;

$people->iterateObject();

echo '<br/>';

  foreach($people as $key => $value){
    print "$key => $value\n";
  }

 ?>
