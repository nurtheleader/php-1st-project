<?php  
include 'connection.php';

class database{

	use connection;

	public $conn = '';

	public function __construct()
	{
		$this->conn = $this->datagula();
	}

	//form data received from register.php
	public function formData($user_name, $full_name, $email, $password)
	{
		$sequel = "INSERT INTO user_register (user_name, full_name, email, password) VALUES (:user_namev, :full_namev, :emailv, :passwordv)";

		$statement = $this->conn->prepare($sequel);
		$statement->execute(array(
			':user_namev' => $user_name,
			':full_namev' => $full_name,
			':emailv' => $email,
			':passwordv' => md5($password),
		));

		return 'success';
	}

}

?>