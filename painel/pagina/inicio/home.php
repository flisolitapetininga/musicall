<?php
    require_once '../core/conexao.php';
    require_once '../core/crud.php';
    $c = new conectar();
    $c->con();
    
    $cliente = new crud();
    $cliente->setTabela('tbCliente');
    $cliente->setCampo('nome');
    
    $cli = $cliente->select();
?>
<fieldset>
    <legend>Clientes</legend>
    <ol>
        <?php
            foreach($cli as $clis){
                echo '<li>'.$clis.'</li>';
            }
        ?>
    </ol>
</fieldset>