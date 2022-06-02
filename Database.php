<?php
        class Database
        {
                function __construct()
                {
			try{
                        	$this->db = new PDO("mysql:host=localhost;dbname=harkespan",'','');
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}

                }
		
		function getDataAll()
		{
			$rs = $this->db->query("SELECT * FROM users");
					
			return $rs;
					
		}
				
		function getDataDetail($id)
		{
			$rs = $this->db->prepare("SELECT * FROM users WHERE id=?");
			$rs->execute([$id]);
			return $rs;
		}

		function insertData($data)
		{
			$rs = $this->db->prepare("INSERT INTO users (username,passwd,active) VALUES (:username,:passwd,:active)");
			$rs->execute($data);
		}
        }
