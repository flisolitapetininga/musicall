<?php
session_start();

if(isset($_SESSION['radio'])){
    $usuario = json_decode($_SESSION['radio']);
    $pagina = array('inicio','arquivo','sair');
    
    //estrutura de pagina
    echo '<div id="e">';
        require_once 'estrutura/menu.php';
    echo '</div>';
    echo '<div id="d">';
        require_once 'pagina/inicio/home.php';
    echo '</div>';
}else{
    require_once 'pagina/acesso/home.php';
}

?>