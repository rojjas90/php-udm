<?php

class Users extends Controller{
  // protected function Index(){
  //   echo 'Users/Index';
  // }

  protected function register(){
    $viewModel = new UserModel();

    $this->returnView($viewModel->register(),true);
  }
}
