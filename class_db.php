<?php 
/**
* classe pour connecter à la base de donné
*/
class connexion
{
	protected $result_con;
	protected $server;
	protected $user;
	protected $password;
	protected $db_name;
	
	protected function connexion1($server,$user,$password,$db_name)
	{
		# code...
		$this->server=$server;
		$this->user=$user;
		$this->password=$password;
		$this->db_name=$db_name;
		$this->result_con=$this->connexion_mysqli();
	}

	private function connexion_mysqli()
	{
		return mysqli_connect($this->server,$this->user,$this->password,$this->db_name);
		
	}
}
