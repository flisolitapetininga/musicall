<?php
    chdir ('../../../');

    if($_GET['a'] == 'criar'){
        
        shell_exec("htpasswd -c .htpasswd ".$_POST['nome']."");
        shell_exec($_POST['senha']);
        
        // exec("htpasswd -c .htpasswd ".$_POST['nome']);
        // exec($_POST['senha']);
        
    }elseif($_GET['a'] == 'salvar'){
        exec("htpasswd .htpasswd ".$_POST['nome']);
        exec($_POST['senha']);
    }
    
    header('Location: ../../?p=inicio');
?>