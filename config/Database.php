<?php

class Database
{
	// private $host  = 'localhost';
    // private $user  = 'behzad';
    // private $password   = "dollar";
	// private $database  = "pra"; 
	
	private $host  = '127.0.0.1';
    private $user  = 'tsmkiantc_ssh_manager_USER';
    private $password   = "-c1L1H5=rx7+";
    private $database  = "tsmkiantc_ssh_manager_DB"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
