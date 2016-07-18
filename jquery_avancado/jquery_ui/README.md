# JQuery UI

jQuery UI é um conjunto recurso para criação de interface de usuário, efeitos, 
widgets e temas construídas em cima da Biblioteca JavaScript jQuery.

O conjunto de recurso é basicamente uma coleção de funções de interface de usuário 
que estão relacionadas e podem ser divididas em três módulos principais:

* Widgets, que contêm interfaces de usuário pré-construídas e customizáveis​​.
* Efeitos, que são animações muito simples e fáceis que você pode fazer para um elemento 
de uma página, tais como agitá-lo, explodi-lo, e assim por diante.
* Interação ampliada do mouse com os elementos da página (por exemplo, arrastar e soltar).

#Exemplo de utilização do jquery para criar uma div em que podemos move-la com o mouse

```php
<html>
      <head>
            <title>Exemplo</title>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />
            <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css" />
            <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
            <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
            <style type="text/CSS">
              .draggable { 
                  border: 2px solid blue;
                   background-color: gray;
                   width: 100px; 
                   height: 60px;
                  margin: 20px; 
                   display: block;
              }
            </style>
            
            <script type="text/JavaScript">
                   $(document).ready(function() {
                     $("#divDrag").draggable();
                   });
            </script>
      </head>
      
      <body>
            <div id="divDrag" class="draggable ui-draggable" style="position: relative;"></div>
      </body>
</html>
```

Para ter acesso a lista de recursos atuais do Jquery UI basta acessar a url 
[https://api.jqueryui.com](https://api.jqueryui.com).

Uma das facilidades que Jquery UI trás é a flexibiblidade na criação de temas, 
observando os includes dos arquivos javascript acima é possível ver a inclusão de 
```http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css``` que é um
arquivo com estilo padrão para os componentes do Jquery UI. É possível baixar outros estilos através da url 
[http://jqueryui.com/themeroller](http://jqueryui.com/themeroller) ou se preferir sobrescrever os estilos do 
tema que esteja sendo utilizado em sua aplicação. 

<br +/>

Referências:

* https://jqueryui.com/
* http://www.devmedia.com.br/explorando-o-jquery-ui/30316
