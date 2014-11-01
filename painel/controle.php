<?php
session_start();

if(isset($_SESSION['radio'])){
    $pagina = array('inicio');
    require_once (isset($_GET['p']) && in_array($_GET['p'],$pagina))?'pagina/'.$_GET['p'].'/home.php':'pagina/inicio/home.php';
}else{
    require_once 'pagina/acesso/home.php';
}

?>