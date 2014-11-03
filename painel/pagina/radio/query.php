<?php
    require_once '../../../core/conexao.php';
    require_once '../../../core/crud.php';
    $c = new conectar();
    $c->con();
    
    $valores  = '"'.$_POST['nome'].'",';
    $valores .= '"'.$_POST['uname'].'",';
    $valores .= '"'.md5($_POST['senha']).'"';
    
    $crud = new crud();
    $crud->setTabela('tbCliente');
    $crud->setCampo('nome,uname,passwd');
    $crud->setValor($valores);
    
    $crud->insert();
    
    header('Location: ../../?p=cliente');
?>