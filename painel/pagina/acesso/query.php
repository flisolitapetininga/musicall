<?php
	session_start();
	
	require_once '../../../core/conexao.php';
	require_once '../../../core/crud.php';
	
	//conexão com o banco de dados
	$c = new conectar();
	$c->con();
	//chamar crud
	$crud = new crud();
	$crud->setTabela('tbUsuario');
	$crud->setCampo('*');
	$crud->setCondicao('uname = "'.$_POST['username'].'" AND passwd = "'.md5($_POST['senha']).'" ');
	
	//consulta
	$dados = $crud->select();
	
	$_SESSION['radio'] = json_encode($dados);
	
	header('Location: ../../');

?>