<?php
class User
{

	// public $id = 33 ;
	private $id;
	private $username;
	private $email;
	private $password;

	public function __construct($username, $password)
	{
		//echo 'Constructor called';
		//
		$this -> username = $username;
    $this -> password = $password;
	}

	public function register()
	{
		echo 'User registered';
	}

	public function login()
	{
    // $this -> username = $username;
    // $this -> password = $password;

		// $this->auth_user();
	}

	public function auth_user()
	{
		echo $this->username.' is authenticated';
		// echo $this->id;
	}

	public function __destruct()
	{
		//echo 'Destructor called';
	}

}

$user = new User('Rojas', 'password');
$user -> register();
// $user->login('Rojas', 'password');

// $user->login();

// echo $user -> username;






?>
