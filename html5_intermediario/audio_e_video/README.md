#Audio e Video

O HTML5 introduz o suporte de mídia embutido por meio dos elementos ```<audio>``` e ```<video>```,
oferecendo a possibilidade de incorporar facilmente mídia em documentos HTML.

#Incorporando mídia:

Adicionando elemento **vídeo** com HTML
```php
<video src="http://v2v.cc/~j/theora_testsuite/320x240.ogg" controls>
  Seu navegador não suporta o elemento <code>video</code>.
</video>
```
Esse exemplo reproduz uma amostra de vídeo, com controles de reprodução, a partir do site Theora.


<br />

Adicionando elemento **audio** com HTML

```php
<audio src="/test/audio.ogg">
<p>Seu nevegador não suporta o elemento audio.</p>
</audio>
```

O atributo src pode ser a URL do arquivo de áudio ou o caminho do arquivo no sistema local.

```php
<audio src="audio.ogg" controls autoplay loop>
<p>Seu navegador não suporta o elemento audio </p>
</audio>
```

<br />

Esse exemplo de código usa atributos do elemento <audio>:

* **controls:** Mostra os controles padrão para o áudio na página.
* **autoplay:** Faz com que o áudio reproduza automaticamente.
* **loop:** Faz com que o áudio repita automaticamente.

<br />

**Exemplo**
```php
<audio src="audio.mp3" preload="auto" controls></audio>
```

O atributo preload é usado em elementos audio para carregar arquivos grandes. Ele pode assumir 3 valores:

* **none:** não carrega o arquivo
* **auto:** carrega o arquivo
* **metadata:** carrega apenas os meta dados do arquivo

Vários arquivos podem ser especificados utilizando o elemento ```<source>``` para disponibilizar 
vídeo ou áudio codificados em formatos diferentes para navegadores diferentes. Por exemplo:

```php
<video controls>
  <source src="foo.ogg" type="video/ogg">
  <source src="foo.mp4" type="video/mp4">
  Seu navegador não suporta o elemento <code>video</code>.
</video>
```



<br />

Referências:

* https://developer.mozilla.org/pt-BR/docs/Web/HTML/Using_HTML5_audio_and_video
* http://www.w3schools.com/html/html5_audio.asp
* http://www.w3schools.com/html/html5_video.asp