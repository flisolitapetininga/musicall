<form method="post" action="pagina/arquivo/query.php" id="formulario">
    <p>Primeiro certifique-se que o arquivo .htpasswd foi gerado primeiro.</p>
    <input type="button" value="Gerar arquivo .htaccess"/>
</form>

<script type="text/javascript">
    window.onload = function(){
        var $input = document.getElementsByTagName('input'),
            $form = document.getElementById('formulario');
            
            $input[0].onclick = function(){
                $form.submit();
            }
    }
</script>