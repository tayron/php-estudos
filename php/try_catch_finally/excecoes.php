<?php

/**
 * 
 */
class UsuarioNaoEncontradoException extends Exception
{
    public function __construct($message = "Usuário não encontrado", $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

/**
 * 
 */
class DadosNaoGravadoNoWebserviceItauException extends Exception
{
    public function __construct($message = "Dados não gravado no webservice no Itaú", $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

/**
 * 
 */
class ErroGraveException extends Exception
{    
    public function __construct($message = "Erro grave", $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

/**
 * 
 */
class ErroAoLimparDadosTemprariosException extends Exception
{
    public function __construct($message = "Erro ao limpar dados temporários", $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
