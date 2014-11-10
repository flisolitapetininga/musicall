<?php
    chdir('../');
    if(!file_exists('.htpasswd')){
        echo '<form method="post" action="pagina/inicio/query.php?a=criar" id="formulario">';
    }else{
        echo '<form method="post" action="pagina/inicio/query.php?a=salvar" id="formulario">';
    }
?>

    <label>Nome:</label>
    <input type="text" name="nome"/>
    <label>Senha:</label>
    <input type="text" name="senha"/>
    
    
    
    <?php
        if(!file_exists('.htpasswd')){
            echo '<input type="submit" value="Criar" id="botao"/>';
        }else{
            echo '<input type="submit" value="Salvar" id="salvar"/>';
            $content = file_get_contents('.htpasswd');
            echo '<textarea name="contas" disabled="true">'.$content.'</textarea>';
        }
    ?>
    
</form>