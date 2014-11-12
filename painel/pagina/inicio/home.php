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
        echo '<input type="checkbox" value="s" name="remover"/> excluir usuário? ';
        echo '<input type="submit" value="Salvar" id="salvar"/>';
        $content = file_get_contents('.htpasswd');
        echo '<textarea name="contas" disabled="true">'.$content.'</textarea>';
    }
?>
</form>

<script type="text/javascript">
    window.onload = function(){
        $obj = document.getElementsByTagName('input');
        $obj[parseFloat($obj.length)-1].onclick = function(){
            
            if($obj[0].value == ''){
                alert('Campo usuario esta vazio.');
                $obj[0].focus();
                return false;
                console.log('primeira condição');
            }else if($obj[1].value.length < 3 || $obj[1].value.length > 16){
                alert('Campo senha precisa ter no minimo 3 e no maximo 16 digitos.');
                $obj[1].focus();
                return false;
                console.log('segunda condição');
            }
            return true;
        }
        
        $obj[2].onchange = function(){
            if(this.checked == true){
                $obj[1].value = '---';
                $obj[1].disabled = true;
            }else{
                $obj[1].value = '';
                $obj[1].disabled = false;
            }
        }
    }
</script>