<form method="post" action="pagina/arquivo/query.php" id="formulario">
    <label>Local:</label>
    <input type="text" name="local" value="../../../"/>
    
    <input type="button" value="Gerar"/>
</form>

<script type="text/javascript">
    window.onload = function(){
        var $input = document.getElementsByTagName('input'),
            $form = document.getElementById('formulario');
            
            $input[1].onclick = function(){
                if($input[0].value != ''){
                    console.log('Arquivo enviado com sucesso.');
                    $form.submit();
                }else{
                    console.log('Campo vazio.');
                    $input[0].focus();
                }
            }
    }
</script>