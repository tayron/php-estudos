<?php
$server = new SoapServer(null, ['uri' => 'http://localhost/soap']);

public function hello($nome)
{
    return 'Hello ' . $nome;
}

$server->addFunction('hello');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $server->handler();
}else{
   $functions = $server->getFunctions();
   foreach($functions as $function){
      echo $function . '<br/>';
   }
}

//Referência: http://imasters.com.br/artigo/4535/php/construindo-web-services-em-php?trace=1519021197&source=single
