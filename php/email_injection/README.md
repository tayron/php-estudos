# Email Injection

Como a maioria de nós sabemos, o php nos fornece a função “mail()” para o envio de emails programados. A utilização da função “mail()” é simples e muito útil em determinadas situações. Podemos especificar parâmetros como assunto, e-mail de destino, corpo da mensagem e os headers. Um ponto importante que devemos levar em consideração relacionado com a segurança de nossa aplicação é quando usamos dados de usuários para configurar algum desses parâmetros de envio de e-mail, principalmente ainda, quando usamos esses dados para montar o header de nosso e-mail.
É muito comum ter na maioria dos sites uma página contendo um formulário de contato. Muitas vezes deixamos na mão do usuário o preenchimento do e-mail de origem, pois é a forma mais usada e também mais correta. Porém se não tratarmos corretamente essa informação no lado do servidor, possibilitaremos algum usuário malicioso explorar um ataque conhecido como Email Injection. A falha permite que o usuário malicioso envie emails spam sem seu consentimento.

Explorando

Vamos supor que você utilize o script abaixo para envio de email:

```php
$email_origem = $_POST['email'];
mail( "nome-destino@exemplo.com.br", "Contato via form", $message, "From: $email_origem" );
```
Perceba que a variável “$email_origem” é obtida através de um formulário enviado via POST. Como não fazemos nenhum tratamento, possibilitamos um usuário malicioso injetar um código que irá enviar spam para outros usuários. Imagine o usuário enviando o seguinte código no campo de formulário do email de origem:

```php
email1@exemplo.com.br
CC: email2@exemplo.com.br, email3@exemplo.com.br, email4@exemplo.com.br
```

Dessa forma, o usuário esta manipulando nosso campo header. Ao final do e-mail de origem, é inserido uma quebra de linha (rn) seguida de um campo de cópia (CC), fazendo com que o e-mail seja copiado para outros endereços.

Prevenindo

A prevenção contra a injeção no header de e-mail é simples: Ou você faz o tratamento, removendo os caracteres de nova linha da string, ou faz uma função de validação que checa a existência desses caractéres na string obtida via POST.

Tratando:
```php
$email_origem = preg_replace( "/[rn]/", '', $email_origem);
```

Validando:

```php
if (preg_match( "/[rn]/", $email_origem) ) {
  // redireciona o usuário para uma página de erro e sai da aplicação ...
}
```

Caso você esteja usando o Zend_Mail (Zend Framework) ou PEAR Mail, fique tranquilo, pois essas libs já fazem o tratamento devido contra email injection.

Referência: 
http://www.douglaspasqua.com/2010/11/16/seguranca-no-php-email-injection
