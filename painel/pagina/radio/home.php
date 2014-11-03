<form method="post" action="./pagina/cliente/query.php" id="formcliente">
    <h1>Cadastro de clientes</h1>
    <p>
        <label>Nome:</label>
        <br/>
        <input type="text" name="nome"/>
    </p>
    <p>
        <label>Login: (no mínimo 3 e no máximo 18 digitos)</label>
        <br/>
        <input type="text" name="uname"/>
    </p>
    <p>
        <label>Senha: (no mínimo 6 digitos)</label>
        <br/>
        <input type="password" name="senha"/>
    </p>
    <p>
        <input type="button" value="Salvar"/>
    </p>
</form>

<script type="text/javascript">
    window.onload = function(){
        var $obj = document.getElementsByTagName('input'),
            $formcliente = document.getElementById('formcliente');
         $obj[3].onclick = function(){
            var erro = 0;
            if($obj[0].value.length < 1){ erro++ }
            if($obj[1].value.length < 3 && $obj[1].value.length > 18){ erro++ }
            if($obj[2].value.length < 6){ erro++ }
            if(erro == 0){
                $formcliente.submit();
            }else{
                alert('Algum campo não está conforme o exigido.');
            }
         }
    }
    console.log('Desenvolvido por Gustavo Mathias');
</script>