<?php

class Home extends Controller{
  protected function Index(){
    // echo 'Home/Index';

    $viewModel = new HomeModel();

    $this->ReturnView($viewModel->Index(), true);
  }
}
