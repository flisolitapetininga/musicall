[voltar](https://github.com/gustavomathias/musicall/blob/master/documentacao/README.md)
#Instralção do Painel.

Para instalar o sistema você precisa configurar o arquivo **conexão.php** localizado dentro da pasta **painel/core/**, onde fica os dados do banco de dados.
No inicio do arquivo, você vai localizar os seguintes atributos.

    `
    private $local = '';
    private $banco = '';
    private $usuario = '';
    private $senha = '';
    `
:: *local*: endereço do banco de dados, muitos servidores utilizam **localhost** mas existe exceção,por exemplo, banco de dados externos.
:: *banco*: nome do banco de dados que sera criado automaticamente.
:: *usuario*: nome do usuário que tenha acesso ao servidor para criação de banco de dados.
:: *senha*: senha do usuário.