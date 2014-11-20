[voltar](https://github.com/gustavomathias/musicall/blob/master/guia_rapido/README.md)
#Instalação e configuração do Painel.

Primeiro passo é copiar a pasta *painel* no diretório que deseja proteger.<br>
Para instalar o sistema você precisa configurar o arquivo **conexão.php** localizado dentro da pasta **painel/core/**, onde fica os dados do banco de dados. <br>
No inicio do arquivo, você vai localizar os seguintes atributos.

    
    private $local = '';
    private $banco = '';
    private $usuario = '';
    private $senha = '';
    
    
- *local*: endereço do banco de dados, muitos servidores utilizam **localhost** mas existe exceção,por exemplo, banco de dados externos.
- *banco*: nome do banco de dados que sera criado automaticamente.
- *usuario*: nome do usuário que tenha acesso ao servidor para criação de banco de dados.
- *senha*: senha do usuário.
 

Após colocar as informações dentro das aspas simples. Salve o arquivo e faça o primeiro login com o usuário **darth** utilizando a senha **vader**.