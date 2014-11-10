<?php
    $local = '/home/kerubin2/Web/musicall/';
    
    chdir ('../../../');

    $string = "AuthType Basic\nAuthName \"Restricted access\"\nAuthUserFile ".$local.".htpasswd\nrequire valid-user";
    $arquivo = fopen('.htaccess','w');
    fwrite($arquivo, $string);
    fclose($arquivo);
    
    header('Location: ../../?p=arquivo')
?>