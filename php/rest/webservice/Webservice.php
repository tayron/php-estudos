<?php

/**
 * Description of Webservice
 *
 * @author Tayron
 */
class Webservice extends WebserviceAbstrato 
{
    /**
     * Definicao das rotas
     */
    public function __construct() 
    {        
        $this->rotas = array(
            'cliente' => array('PUT', 'DELETE', 'GET'),
            'Usuario' => array('POST', 'PUT', 'GET')
        );
    }
}
