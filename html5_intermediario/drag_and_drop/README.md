#Drag and Drop

HTML5 trouxe um recurso chamado HTML5 Drag and Drop. Esse recurso nada mais é do 
que "arrastar e soltar".

#Suporte 

Os navegadores que suportam essa funcionalidade são:

* Internet Explorer 9+
* Firefox
* Chrome
* Safari (5+)

Essa funcionalidade acontece porque os elementos HTML possuem uma propriedade chamada 
**draggable** e quando setada com o valor **true** ela passa a ser arrastável.

<br />

#Exemplo

```php
<img src="http://www.tayron.com.br/theme_site/img/logomarca.png" id="logomarca" draggable="true" />
```

<br />

Por mais que HTML e CSS evolua eles sempre irão precisar ser complementados com código 
Javascript, veja o exemplo funcional do Drag and Drop abaixo:

```php
<html lang="pt-br">
    <head>
        <title>Drag and Drop HTML5</title>
        <style type="text/css">
            #DivDestino{width:350px; height:70px; padding:10px; border:1px solid #aaaaaa;}
            img{cursor: move;}
        </style>
        <script type="text/javascript">
            function allowDrop(ev)
            {
                ev.preventDefault();
            }

            function drag(ev)
            {
                ev.dataTransfer.setData("Text", ev.target.id);
            }

            function drop(ev)
            {
                var data = ev.dataTransfer.getData("Text");
                ev.target.appendChild(document.getElementById(data));
                ev.preventDefault();
            }
        </script>
    </head>
    <body>
        <div id="DivDestino" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <br />
        <img id="LogoDrag" src="http://www.tayron.com.br/theme_site/img/logomarca.png" draggable="true" ondragstart="drag(event)" width="336" height="69" />
    </body>
</html>
```

Acima temos um CSS para formatar a div de destino, é nela que iremos iremos “largar” a 
imagem que vamos arrastar. 

<br />

No Javascript temos uma função chamada “allowDrop” que irá “permitir” que o **Drag 
and Drop** ocorra. Ela é fundamental, pois por padrão o HTML não permite que elementos 
sejam arrastados sobre outros.

<br />

Criamos também a função “drag” que é a função que irá executar a transferência da 
imagem de um lugar para o outro, ou seja, de onde estiver para dentro da 
div destino.

<br />

Referências:

* http://www.devmedia.com.br/html5-drag-and-drop-dica/28611
* https://html.spec.whatwg.org/multipage/interaction.html#dnd
* http://www.html5rocks.com/pt/tutorials/dnd/basics