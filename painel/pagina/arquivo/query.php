<?php
    chdir ('../../../');

    $string = "AuthType Basic\nAuthName \"Restricted access\"\nAuthUserFile ./../../../.htpasswd\nrequire valid-user";
    $arquivo = fopen('.htaccess','w');
    fwrite($arquivo, $string);
    fclose($arquivo);
    
    header('Location: ../../?p=arquivo')
?>