<?php
    chdir ('../../../');

    if($_GET['a'] == 'criar'){
        exec("htpasswd -c .htpasswd ".$_POST['nome']);
        exec($_POST['senha']);    
        // exec($_POST['senha']);
    }elseif($_GET['a'] == 'salvar'){
        exec("htpasswd .htpasswd ".$_POST['nome']);
        exec($_POST['senha']);
        // exec($_POST['senha']);
        
    }
    // exec('sudo chown kerubin2:kerubin2');
    
    header('Location: ../../?p=inicio');
?>