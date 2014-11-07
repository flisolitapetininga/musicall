<?php
    
    chdir ($_POST['local']);
    if(chmod('./',0777)){
        echo "permissao modificada para 777";
    }else{
        echo "nao foi possivel modificar permissao";
    }

    // $string = "AuthType Basic\nAuthName \"Restricted access\"\nAuthUserFile /home/USERNAME/.htpasswd\nrequire valid-user";
    // $arquivo = fopen('.htaccess','w');
    // fwrite($arquivo, $string);
    // fclose($arquivo);
    
    // chmod($_POST['local'],755);
    // header('Location: ../../?p=arquivo')
?>