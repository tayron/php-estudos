<?php
/**
 * Description of ServicoAbstrato
 *
 * @author Tayron
 */
interface ServicoInterface
{
    /**
     * Salva um parametro
     */
    public function salvar($parametro);
    
    /**
     * Deleta um parametro
     */
    public function deletar($parametro);
    
    /**
     * Recupera dados de um parametro
     */
    public function buscar($parametro = null);
}
