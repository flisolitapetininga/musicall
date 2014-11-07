<?php
	class conectar{
		private $local = '';
		private $banco = '';
		private $usuario = '';
		private $senha = '';
		
		public function con(){
			$c = mysql_connect($this->local, $this->usuario, $this->senha);
			$c = mysql_select_db($this->banco, $c);
			
			return $c;
		}
		
	}
?>