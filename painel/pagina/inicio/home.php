<form method="post" action="pagina/inicio/query.php" id="formulario">
    <label>Nome:</label>
    <input type="text" name="nome"/>
    <label>Senha:</label>
    <input type="text" name="senha"/>
    
    <textarea name="contas"></textarea>
    
    <input type="button" value="Adicionar"/>
    <input type="button" value="Salvar"/>
</form>



<script type="text/javascript">
    window.onload = function(){
        var $input = document.getElementsByTagName('input'),
            $form = document.getElementById('formulario');
            
            $input[2].onclick = function(){ //botão adicionar
                $form.setAttribute('action','pagina/inicio/query.php?a=adicionar');
                //$form.submit();
            }
            $input[3].onclick = function(){ //botão adicionar
                $form.setAttribute('action','pagina/inicio/query.php?a=alterar');
                //$form.submit();
            }
    }
</script>