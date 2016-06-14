<?php
require_once('Execoes.php');
/**
 * Description of Processamento
 *
 * @author Tayron
 */
class Processamento
{
    /**
     *
     * @var type
     */
    private $usuario;

    /**
     *
     * @throws ErroGraveException
     */
    public function __construct()
    {
        $this->usuario = new Usuario();

        try{
            $this->gravarDadosWebserviceItau($this->usuario->buscarUsuario());
        } catch (UsuarioNaoEncontradoException $ex){
            $this->usuario->criaUsuario();
            $this->gravarDadosWebserviceItau($this->buscarUsuario());
        } catch (DadosNaoGravadoNoWebserviceItauException $ex){
            $this->enviarSmsParaSuporteItau($ex->getMessage());
        } catch (Exception $ex) {
            throw new ErroGraveException($ex->getMessage());
        } finally {
            $this->limparArquivosTemporarios();
        }
    }

    /**
     *
     * @param array $usuarios
     * @throws DadosNaoGravadoNoWebserviceItauException
     */
    private function gravarDadosWebserviceItau(array $usuarios)
    {
        $gravacaoDados = false;
        if($gravacaoDados){
            throw new DadosNaoGravadoNoWebserviceItauException();
        }
    }

    /**
     * 
     * @throws ErroAoLimparDadosTemprariosException
     */
    private function limparArquivosTemporarios()
    {
        $arquivosForamlimpos = true;
        if(!$arquivosForamlimpos){
            throw new ErroAoLimparDadosTemprariosException();
        }
    }
}
