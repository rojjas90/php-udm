<?php

class Bootstrap{
  private $controller;
  private $action;
  private $request;

  public function __construct($request)
  {
    $this->request = $request;

    // first part of our route: CONTROLER
    if ($this->request['controller'] == "") {
      $this->controller = 'home';
    }
    else {
      $this->controller = $this->request['controller'];
    }

    // second part of our route: ACTION
    if ($this->request['action'] == "") {
      $this->action = 'index';
    }
    else {
      $this->action = $this->request['action'];
    }

    // echo $this->controller;
  }

  public function createController()
  {
    // Check class
    if (class_exists($this->controller)) {
      $parents = class_parents($this->controller);

      // Check extend
      if (in_array("Controller",$parents)) {
        if (method_exists($this->controller, $this->action)) {
          return new $this->controller($this->action, $this->request);
        }
        else {
          // Methods does not exist
          echo '<h1>Method does not exist!</h1>';
          return;
        }
      }
      else {
        // Base Controller does not found
        echo '<h1>Base controller not found!</h1>';
        return;
      }
    }
    else {
      // Controller class does not exist
      echo '<h1>Controller class does not exist!</h1>';
      return;
    }
  }
}

 ?>
