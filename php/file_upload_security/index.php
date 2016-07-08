<?php

    // Pasta onde o arquivo vai ser salvo
    $arquivo['pasta'] = 'uploads/';

    // Tamanho máximo do arquivo (em Bytes)
    $arquivo['tamanho'] = 1024 * 1024 * 2; // 2Mb

    // Array com as extensões permitidas
    $arquivo['extensoes'] = array('image/png');

    // Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
    $arquivo['renomeia'] = false;

    // Array com os tipos de erros de upload do PHP
    $arquivo['erros'][0] = 'Não houve erro';
    $arquivo['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
    $arquivo['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
    $arquivo['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $arquivo['erros'][4] = 'Não foi feito o upload do arquivo';

    // Verifica se houve algum erro com o upload. Se sim, lança uma exceção
    if ($_FILES['arquivo']['error'] != 0) {
        throw new Exception($arquivo['erros'][$_FILES['arquivo']['error']]);
    }
    
    // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
    // Faz a verificação da extensão do arquivo
    if (!in_array($_FILES["arquivo"]["type"], $arquivo['extensoes'])) {
        throw new Exception('Tipo do arquivo inválido, é permitido somente png');
    }

    // Faz a verificação do tamanho do arquivo
    if ($arquivo['tamanho'] < $_FILES['arquivo']['size']) {
        throw new Exception('O arquivo enviado é muito grande, envie arquivos de até 2Mb.');
    }

    // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .png
    $nomeArquivo = md5(time()).'.png';
 
    // Depois verifica se é possível mover o arquivo para a pasta escolhida
    if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo['pasta'] . $nomeArquivo)) {
        throw new Exception('Não foi possível enviar o arquivo');
    }