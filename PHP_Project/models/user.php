<?php
class UserModel extends Model {
  // public function Index(){
  //   return;
  // }

  public function register(){
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // Encripting password
    $password = md5($post['password']);

    if ($post['submit']) {

      if ($post['name'] == '' || $post['email'] == '' || $post['password'] == '') {
        Messages::setMessage('Please fill in  all fields', 'error');
        return;
      }

      // die('SUBMITTED');

      // Insert into MySQL

      $this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
      $this->bind(':name', $post['name']);
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);

      $this->execute();

      // Verify
      if ($this->lastInsertId()) {
        // Redirect
        header('Location:' . ROOT_URL . 'users/login');
      }
    }

    return;
  }

  public function login(){
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // Encripting password
    $password = md5($post['password']);

    if ($post['submit']) {

      // die('SUBMITTED');

      // Compare login

      $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);

      $row = $this->single();

      if ($row) {
        // echo 'Logged in';
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_data'] = array(
          "id" => $row['id'],
          "name" => $row['name'],
          "email" => $row['email']
        );

        // Messages::setMessage('You are loggin', 'success');

        // Redirect
        header('Location:' . ROOT_URL . 'shares');
      }
      else {
        // echo 'Incorrect login';
        Messages::setMessage('Incorrect login', 'error');
      }

    }

    return;
  }
}
