<?php

class Shares extends Controller{
  public function Index(){
    $viewModel = new ShareModel();

    $this->ReturnView($viewModel->Index(), true);
  }

  public function add(){
    if (!isset($_SESSION['is_logged_in'])) {
      header('Location: '. ROOT_URL . 'shares');
    }

    $viewModel = new ShareModel();
    $this->returnView($viewModel->add(),true);
  }
}
