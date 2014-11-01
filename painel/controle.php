<?php
$pagina = array('acesso');

require_once (isset($_GET['p']) && in_array($_GET['p'],$pagina))?'pagina/'.$_GET['p'].'/home.php':'pagina/acesso/home.php';
?>