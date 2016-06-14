<?php
require_once('Processamento.php');

try{ 
    new Processamento();
} catch (ErroGraveException $ex){
    echo 'Erro inesperado: ' . $ex->getMessage();
}
        