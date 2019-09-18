<?php

	class ClassConexao{
		public function conectaDB(){
			try{
				$Con = new PDO("mysql:host=localhost;dbname=labes","root","");
				return $Con;
			}catch(PDOException $Erro){
				return $Erro->getMessage();
			}
		}
	}