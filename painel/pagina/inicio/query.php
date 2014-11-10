<?php
    chdir ('../../../');

    if($_GET['a'] == 'criar'){
        shell_exec("htpasswd -c .htpasswd ".$_POST['nome']."");
        shell_exec($_POST['senha']);
    }elseif($_GET['a'] == 'salvar'){
        shell_exec("htpasswd .htpasswd ".$_POST['nome']);
        shell_exec($_POST['senha']);
    }
    
    chdir('painel/');
    shell_exec('sh musicall.sh');
    header('Location: ../../?p=inicio');
?>