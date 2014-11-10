<?php
    chdir ('../../../');

    if($_GET['a'] == 'criar'){
        exec("htpasswd -c .htpasswd ".$_POST['nome']);
        exec($_POST['senha']);    
    }elseif($_GET['a'] == 'salvar'){
        exec("htpasswd -sd .htpasswd ".$_POST['nome']);
        exec($_POST['senha']);
    }
    
    header('Location: ../../?p=inicio')
?>