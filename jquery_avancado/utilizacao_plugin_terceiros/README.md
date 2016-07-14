# Utilização de Plugins de Terceiros

Há vários plugins para Jquery e a grande vantagem está no encapsulamento e reaproveitamento de código (essas são as palavras-chave). 
Se você está codificando algo que talvez sirva para futuros projetos, pode ser uma boa encapsular tudo isso em um plugin.

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
referenciar um objeto em nosso DOM ```php $('div').NOMEPLUGIN()```.

<br />

É importante lembrar que os arquivos javascript e css devem ser carregados no HTML, 
onde os arquivos css são carregados no HEAD da página e os arquivos javascript logo após a chamada do arquivo do Jquery.

**Usando o plugin tooltip em um campo input de um formulário:**
```php
$(function() {
    $(".inputNome").tooltip();
});
```


