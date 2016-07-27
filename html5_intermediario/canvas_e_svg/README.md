#SVG e Canvas

#SVG

SVG é a abreviatura de **Scalable Vectorial Graphics**, que traduzido para o português 
significa **Gráficos Vetoriais Escaláveis**. 

<br />

SVG é uma linguagem XML para descrever gráficos bidimensionais sejam eles de forma dinâmica, estática ou animada. 
Seu diferencial em relação as outros formatos vetoriais é de ser um formato aberto, 
não pertencendo a nenhuma empresa. Ele foi originalmente criado pelo W3C, responsável 
pela definição de outros padrões como HTML, XHTML, XML.

Você pode aplicar estilos ao SVG facilmente com o uso de CSS e adicionar comportamento 
dinâmico com o uso de SVG DOM, e no final pode "embedar" de forma simples arquivos SVG 
no HTML através da tag object.

**Exemplo**

```php
<object data="url/do/arquivo/svg" type="image/svg+xml" width="200″ height="200″>
    Seu browser não possui suporte a SVG.
</object>
```

[Para ver um exemplo de uma imagem em SVG clique aqui](http://www.pinceladasdaweb.com.br/blog/uploads/svg/eucartonn.svg).

<br />

#Canvas

O elemento canvas permite no HTML através de uma área determinada na página criar 
desenhos através de scripts (Javascript).

O canvas foi desenvolvido inicialmente pela **Apple** para uso dentro do **MAC OS X**, 
alimentando aplicações como **Widgets do Dashboard** e o **Safari**. Posteriormente foi 
adotado pelos browsers baseados no motor **Gecko** e **Opera** e padronizado pelo **WHATWG**.

Existem 2 formas de desenhar com canvas, utilizando um **contexto 2D** ou utilizando 
um contexto de desenho **3D com WebGL**. A primeira opção está mais elaborada e 
todos os navegadores modernos, incluindo o **IE9** dão pleno suporte a essa opção. 
Já a segunda ainda está em desenvolvimento e na web hoje só se encontram algumas 
implementações em forma de experimento.

Abaixo você vê um exemplo do código canvas do HTML5:

```php
<canvas id="meu-canvas" width="200″ height="200″>
    Seu browser não possui suporte a tag canvas do HTML5
</canvas>
```

Agora, com a utilização de JavaScript podemos desenhar qualquer coisa dento do canvas:

```php
var canvas = document.getElementById(‘meu-canvas’);
var ctx = canvas.getContext(‘2d’);
ctx.fillStyle = "rgb(255,0,0)";
ctx.fillRect(60, 60, 50, 50);
```

O resultado no navegador será um quadrado de tamanho 50x50px.
![alt text](data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAABjElEQVR4nO3TsQnAQBAEse+/absCJ05meSS4Bo6dcwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAX55znhuu/iOXqoctEKbVwxYI0+phC4Rp9bAFwrR62AJhWj1sgTCtHrZAmFYPWyBMq4ctEKbVwxYI0+phC4Rp9bAFwrR62AJhWj1sgTCtHrZAmFYPWyBMq4ctEKbVwxYI0+phC4Rp9bAFwrR62AJhWj1sgTCtHrZAmFYPWyBMq4ctEKbVwxYI0+phC4Rp9bAFwrR62AJhWj1sgTCtHrZAmFYPWyBMq4ctEKbVwxYI0+phC4Rp9bAFwrR62AJhWj1sgTCtHrZAmFYPWyBMq4ctEKbVwxYI0+phC4Rp9bAFwrR62AJhWj1sgTCtHrZAmFYPWyBMq4ctEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIAvL47XdZYf/v8bAAAAAElFTkSuQmCC)

# Aplicação

**O Canvas pode ser usado para:**

* Interatividade com edição de imagens: cortar, redimensionar, aplicar filtros.
* Geração de gráficos.
* Análise de imagens para gerar por exemplo, histogramas.
* Renderização de jogos.

**O SVG pode ser usado para:**

* Criar um aplicativo web que independe da resolução do usuário.
* Criar intefaces interativas.
* Criação de gráficos.
* Edição de imagem baseada em vetores.

<br />

Referências: 

 * http://www.pinceladasdaweb.com.br/blog/2010/09/01/svg-vs-canvas/
