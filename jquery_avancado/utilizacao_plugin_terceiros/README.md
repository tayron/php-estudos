# Utilização de Plugins de Terceiros

Há vários plugins para Jquery e a grande vantagem está no encapsulamento e reaproveitamento de código (essas são as palavras-chave). 
Se você está codificando algo que talvez sirva para futuros projetos, pode ser uma boa encapsular tudo isso em um plugin.

#Criação de Plugin

Existe diversas formas de se criar plugin para JQuery mas abaixo segue um exemplo básico da criação de um:

```php
(function($){
    $.fn.janela = function(mensagem) 
    {
        alert(mensagem);
    }; 
})(jQuery);
```

Para usar o plugin criado acima de nome "janela" basta seguir o exemplo abaixo:

```php
$(document).ready(function() {
    $('body').janela('Hello World');
});
```

Ao utilizar o plugin 'janela' deverá abrir uma janela (alert) com a mensagem "Hello World".

Portanto sempre que usarmos um plugin devemos chamar por seu nome logo após 
referenciar um objeto em nosso DOM ``` $('div').NOMEPLUGIN()```.

#Usando plugins de terceiros

Para usar o plugin de terceiro, deve-se adicionar seus aruqivos no projeto ou na 
hora de carrega-los no HTML informar o caminho dos arquivos na WEB

É importante lembrar que todos os arquivos javascript do plugin devem ser carregados 
no HTML logo após a chamada para o arquivo Jquery e os arquivos css dentro do elemento 
```<head></head>```

**Exemplo:**

```php
<html>
<head>
     <title>Exemplo</title>
     <link href='/plugin/css/estilo.css' rel='stylesheet' />
</head>
<body>
    <div class='content'>
        <h1>Exemplo</h1>

        <input type='text' id='inputNome' name='inputNome' />
    </div>

    <script src='/jquery.min.js'></script>
    <script src='/plugin/js/tooltip/tooltip.min.js'></script>
    <script>
        $(function() {
            $(".inputNome").tooltip();
        });
    </script>
</body>
</html>
```


