<?php
require_once('Processamento.php');

// Utilizando a classe
try{ 
    new Processamento();
} catch (ErroGraveException $ex){
    echo 'Erro inesperado: ' . $ex->getMessage();
}
        