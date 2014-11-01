<div><image src="../imagem/logo.png" width="400" height="135"/></div>
<div>
    <form method="post" action="./pagina/acesso/query.php" id="formacesso">
        <input type="text" name="username" placeholder="Nome do usuário"/>
        <input type="password" name="senha" placeholder="Senha do usuário"/>
        <input type="button" name="acessar" value="acessar"/>
    </form>
</div>

<script type="text/javascript">
	window.onload = function(){
		var $obj = document.getElementsByTagName('input');
			$obj[2].onclick = function(){
				if($obj[0].value != '' && $obj[1].value != ''){
					document.getElementById('formacesso').submit();
				}
			}
	}
	console.log('Desenvolvido por Gustavo Mathias');
</script>