<?php
class User
{

	public $id;
	public $username;
	public $email;
	public $password;

	public function __construct()
	{
		//echo 'Constructor called';
	}

	public function register()
	{
		echo 'User registered';
	}

	public function login($username, $password)
	{
		$this->auth_user($username, $password);
	}

	public function auth_user($username, $password)
	{
		echo $username.' is authenticated';
	}

	public function __destruct()
	{
		//echo 'Destructor called';
	}

}

$user = new User();
// $user -> register();
$user->login('Rojas', 'Snts');

?>
