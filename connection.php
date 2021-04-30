<?php  

trait connection{

	public $host = 'localhost';
	public $dbName = 'class_6';
	public $username = 'root';
	public $password = '';

	public function datagula()
	{
		$conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);

		return $conn;
	}
}

?>