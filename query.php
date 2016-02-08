<?php
	require 'classe_db.php';
	class query extends connexion
	{
		public $result;
		protected $conx;
		public $num_rows;
		//conection to database
		private function protect()
		{
			# code...
			$this->conx=$this->connexion1("your host","user","password","database name");
		}

		public function execute_requet($query)
		{
			$this->protect();
			$this->verife($query);
			return $this->result;
		}
		private function verife($requet)
		{
			$splited_query=explode(" ", $requet);
			$type_query=strtoupper($splited_query[0]);
			switch ($type_query) {
				case "SELECT":
					$this->select_query($requet);
					//echo $requet."**";
					break;
					case 'INSERT':
						$this->insert_query($requet);
						break;
					case 'DELETE':
					$this->delete_query($requet);
					break;
					case "UPDATE":
					$this->update_query($requet);
					break;
				
				default:
					echo "erreur dans la requet";
					break;
			}
		}

			private function select_query($query)
			{
				$res=mysqli_query($this->result_con, $query)or die(mysqli_error($this->result_con));
				$this->num_rows=mysqli_num_rows($res);
				//echo $this->num_rows;
				
				while ($ligne=mysqli_fetch_assoc($res)) {
					$tableau[]=$ligne;
				}
				$this->result=$tableau;
			}
			private function insert_query($query)
			{
				# code...
				mysqli_query($this->result_con, $query)or die(mysqli_error($this->result_con));
			}
			private function delete_query($query)
			{
				# code...
				mysqli_query($this->result_con, $query)or die(mysqli_error($result_con));
			}
			private function update_query($query)
			{
				# code...
				mysqli_query($this->result_con, $query)or die(mysqli_error($result_con));
			}
		}
