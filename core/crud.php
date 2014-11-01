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
		
		public function select(){
			$sql = 'SELECT '.$this->campo.' FROM '.$this->tabela.((isset($this->condicao))? ' WHERE '.$this->condicao : '');
			$query = mysql_query($sql);
			$query = mysql_fetch_object($query);
			
			return $query;
		}
	}
?>