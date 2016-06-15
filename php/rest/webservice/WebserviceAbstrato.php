<?php
require_once('../servicos/ClienteServico.php');

/**
 * Description of WebserviceAbstrato
 *
 * @author Tayron
 */
abstract class WebserviceAbstrato 
{
    /**
     *
     */
    protected $rotas = array();
    
    /**
     *
     */
    private $listaServicos = array(
        'POST' => 'salvar',
        'PUT' => 'atualizar',
        'GET' => 'buscar',
        'DELETE' => 'deletar'        
    );
    
    /**
     * 
     */
    public function rodar()
    {
        $metodo = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        $servico = current(explode('/', $uri));
        $parametros = end(explode('/', $uri));          
        
        if(isset($this->listaServicos[$metodo])){            
            $servico = new $servico . 'Servico';
            $retorno = $servico->$this->listaServicos[$metodo]($parametros);
            
            return $this->toJson($retorno);
        }
    }
    
    /**
     * 
     */
    private function toJson(array $listaRetorno)
    {
        return null;
    }
    
    /**
     * 
     */
    private function toArray(array $listaRetorno)
    {
        return null;
    }
}
