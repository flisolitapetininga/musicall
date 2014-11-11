<?php
    chdir ('../../../');

    if($_GET['a'] == 'criar'){
        shell_exec("htpasswd -bc .htpasswd ".$_POST['nome']." ".$_POST['senha']);
    }elseif($_GET['a'] == 'salvar'){
        shell_exec("htpasswd -b .htpasswd ".$_POST['nome']." ".$_POST['senha']);
    }
    
    header('Location: ../../?p=inicio');
?>