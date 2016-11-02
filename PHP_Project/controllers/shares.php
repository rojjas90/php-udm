<?php

class Shares extends Controller{
  public function Index(){
    $viewModel = new ShareModel();

    $this->ReturnView($viewModel->Index(), true);
  }

  public function add(){
    $viewModel = new ShareModel();
    $this->returnView($viewModel->add(),true);
  }
}
