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

Isso reproduz o arquivo Ogg em navegadores que suportam o formato Ogg. Se o navegador 
não suportar Ogg, o navegador reproduz o arquivo  MPEG-4. 
Veja também a lista [media formats supported by the audio and video elements](https://developer.mozilla.org/En/Media_formats_supported_by_the_audio_and_video_elements) 
para mais detalhes.

<br /> 

Também é possível especificar os codecs que o arquivo de mídia requer; isso permite 
que o navegador faça escolhas mais inteligentes:


```php
<video controls>
  <source src="foo.ogg" type="video/ogg; codecs=dirac, speex">
  Seu navegador não suporta o elemento <code>video</code>.
</video>
```

Aqui é especificado que o vídeo usa os codecs Dirac e Speex. Se o navegador suportar 
Ogg, mas não suportar os codecs especificados, o vídeo não será reproduzido.

Se o atributo type não estiver especificado, o tipo de mídia é obtido no servidor e 
é verificado se o navegador consegue reproduzi-lo; 
se ele não pode ser renderizado, o próximo source é verificado. 
Se nenhum dos elementos source pode ser utilizado, um evento error é enviado para 
o elemento video. Se o atributo type estiver especificado, ele é comparado aos 
tipos que o navegador consegue reproduzir, e se ele não for reconhecido, 
o servidor não é verificado; ao invés disso, o próximo source é verificado.

Veja [Media events](https://developer.mozilla.org/en/DOM/Media_events) para uma lista 
completa de eventos relacionados a reprodução de mídia. Para detalhes sobre os 
formatos de mídia suportados por vários navegadores, veja 
[Media formats supported by the audio and video elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Supported_media_formats).


# Controlando a reprodução de mídia


<br />

Referências:

* https://developer.mozilla.org/pt-BR/docs/Web/HTML/Using_HTML5_audio_and_video
* http://www.w3schools.com/html/html5_audio.asp
* http://www.w3schools.com/html/html5_video.asp