<?php
	class conectar{
		private $local = 'localhost';
		private $banco = 'musicall';
		private $usuario = 'root';
		private $senha = '81224773';
		
		public function con(){
			$c = mysql_connect($this->local, $this->usuario, $this->senha);
			$c = mysql_select_db($this->banco, $c);
			
			return $c;
		}
		
	}
?>