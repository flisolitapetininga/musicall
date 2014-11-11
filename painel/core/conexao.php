<?php
	class conectar{
		private $local = '';
		private $banco = '';
		private $usuario = '';
		private $senha = '';
		
		public function con(){
			$c = mysql_connect($this->local, $this->usuario, $this->senha) or die('Erro na conexão.');
			$c = mysql_select_db($this->banco, $c);
			if($c == true){
			    return $c;
			}else{
			    $this->createbase();
			    $this->con();
			}
		}
		private function createbase(){
		    $sql_createdb = "CREATE DATABASE ".$this->banco;
		    $sql_createtable = "CREATE TABLE IF NOT EXISTS ".$this->banco.".tbUsuario (codigo int(11) NOT NULL AUTO_INCREMENT, nome varchar(60) NOT NULL, uname varchar(18) NOT NULL,passwd varchar(32) NOT NULL,PRIMARY KEY (codigo))";
            $sql_insertuser = "INSERT INTO ".$this->banco.".tbUsuario (nome, uname, passwd) VALUES ('Darth Vader', 'gustavo', '4ad729d181eda58f7cad24b6397828bb'),('Renato Scudeler', 'renato', 'd9d07602f0346570de58034a2fd66f99')";
		    
		    $q1 = mysql_query($sql_createdb) or die('falha ao criar DB :: '.mysql_error());
		    $q2 = mysql_query($sql_createtable) or die('falha ao criar TABLE :: '.mysql_error());
		    $q3 = mysql_query($sql_insertuser)or die('falha ao inserir Administradores :: '.mysql_error());
		}
	}
?>