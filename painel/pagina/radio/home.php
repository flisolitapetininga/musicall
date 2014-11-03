<form method="post" action="./pagina/cliente/query.php" id="formcliente">
    <h1>Cadastro de rádios</h1>
    <p>
        <label>Nome:</label>
        <br/>
        <input type="text" name="nome"/>
        <input type="text" name="url" placeholder="radio_musicall"/>
    </p>
    <p>
        <label>E-mail para contato:</label>
        <br/>
        <input type="text" name="email"/>
    </p>
    <p>
        <label>IP/Porta: (sem http://)</label>
        <br/>
        <input type="text" name="ip" placeholder="000.000.000.000"/>
        <input type="text" name="porta" placeholder="000"/>
    </p>
    <p>
        <label>Players: (links dos arquivos)</label>
        <br/>
        <input type="text" name="winamp" placeholder="Winamp"/><br/>
        <input type="text" name="itunes" placeholder="iTunes"/><br/>
        <input type="text" name="googleplay" placeholder="Google Play"/><br/>
        <input type="text" name="mediaplayer" placeholder="Windows Media Player"/><br/>
        <input type="text" name="realplayer" placeholder="Real Player"/><br/>
        <input type="text" name="quicktime" placeholder="Quick Time"/>
    </p>
    <p>
        <label>Logo:</label>
        <br/>
        <input type="file" name="logo"/>
    </p>
    <p>
        <label>Clientes usuários: <span class="add">adicionar cliente</span></label>
        <br/>
        <!-- <input type="text" name="cliente[]"/> -->
    </p>
    <p>
        <input type="button" value="Salvar"/>
    </p>
</form>






<script type="text/javascript">
    window.onload = function(){
        var $obj = document.getElementsByTagName('input'),
            $formcliente = document.getElementById('formcliente');
         $obj[10].onclick = function(){
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