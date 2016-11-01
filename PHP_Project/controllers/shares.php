<?php

class Shares extends Controller{
  public function Index(){
    $viewModel = new ShareModel();

    $this->ReturnView($viewModel->Index(), true);
  }
}
