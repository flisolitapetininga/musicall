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
        <ol id="clientes"></ol>
    </p>
    <p>
        <input type="button" value="Salvar"/>
    </p>
</form>






<script type="text/javascript">
    window.onload = function(){
        var $obj = document.getElementsByTagName('input'),
            $formcliente = document.getElementById('formcliente'),
            $btn = $obj.length - 1,
            $addInput = document.getElementsByClassName('add')[0];
         
        $addInput.onclick = function(){
            addInput();
            delInput();
        }
          
           
           
           
           
           
           
            
         //$obj[$btn].onclick = function(){
            //
         //}
    }
    function addInput(){
        var $liElement = document.createElement('LI'),//criar li
            $inputElement = document.createElement('INPUT'), //criar input
            $spanElement = document.createElement('SPAN'), //criar span
            $parentElement = document.getElementById('clientes'), //ul
            i = document.getElementsByClassName('cli').length; //contar quantos li
            
            $liElement.setAttribute('class', 'cli');//attr
            $inputElement.setAttribute('type','text');//attr
            $inputElement.setAttribute('name','clientes[]');//attr
            $spanElement.setAttribute('class','del');
            $spanElement.innerHTML = 'remover cliente';
            
            $parentElement.appendChild($liElement);// adiciona li
            document.getElementsByClassName('cli')[i].appendChild($inputElement); //adiciona input dentro do ultimo li criado
            document.getElementsByClassName('cli')[i].appendChild($spanElement);
    }
    function delInput(){
        var $remove = document.getElementsByClassName('del'),
            i = 0;
            for(i = 0; i < $remove.length; i++){
                $remove[i].onclick = function(){
                    $liRemove = this.parentNode;
                    $liRemove.parentNode.removeChild($liRemove);
                }
            }
    }
    console.log('Desenvolvido por Gustavo Mathias');
</script>