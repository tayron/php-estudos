<?php
/**
 * Description of ServicoAbstrato
 *
 * @author Tayron
 */
interface ServicoInterface
{
    /**
     * Salva um registro
     */
    public function salvar($parametro);
    
    /**
     * Altera um registro
     */
    public function atualizar($parametro);
    
    /**
     * Deleta um registro
     */
    public function deletar($parametro);
    
    /**
     * Recupera dados
     */
    public function buscar($parametro = null);
}
