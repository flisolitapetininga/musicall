<?php
    session_start();
    if(isset($_SESSION['radio'])){
        chdir ('../../../');
        if($_GET['a'] == 'criar'){
            shell_exec("htpasswd -bc .htpasswd ".$_POST['nome']." ".$_POST['senha']);
        }elseif($_GET['a'] == 'salvar'){
            if($_POST['remover'] == 's'){
                shell_exec("htpasswd -D .htpasswd ".$_POST['nome']." ".$_POST['senha']);
            }else{
                shell_exec("htpasswd -b .htpasswd ".$_POST['nome']." ".$_POST['senha']);    
            }
        }
        header('Location: ../../?p=inicio');
    }else{
        header('Location: ../../?p=sair');
    }
?>