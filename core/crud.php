<?php
	class crud{
		private $tabela;
		private $campo;
		private $condicao;
		private $valor;
		
		public function setTabela($tabela){
			$this->tabela = $tabela;
		}
		public function setCampo($campo){
			$this->campo = $campo;
		}
		public function setCondicao($condicao){
			$this->condicao = $condicao;
		}
		public function setValor($valor){
			$this->valor = $valor;
		}
		
		### -- teste --###
		public function getValor(){
		    return $this->valor;
		}
		
		public function select(){
			$sql = 'SELECT '.$this->campo.' FROM '.$this->tabela.((isset($this->condicao))? ' WHERE '.$this->condicao : '');
			$query = mysql_query($sql) or die ('erro na consulta:: '.mysql_error());
			$query = mysql_fetch_object($query);
			return $query;
		}
		public function insert(){
		    $sql = 'INSERT INTO '.$this->tabela.' ('.$this->campo.') VALUES ('.$this->valor.')';
		    $query = mysql_query($sql) or die ('erro na consulta:: '.mysql_error());
		    return $query;
		}
	}
?>