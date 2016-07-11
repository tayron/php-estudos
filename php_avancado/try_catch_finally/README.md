# Exceptions

O PHP 5 possui um modelo de exceções similar ao de outras linguagens de programação. Uma exceção pode ser lançada (throw) e capturada (catch). Código pode ser envolvido por um bloco try para facilitar a captura de exceções potenciais. Cada bloco try precisa ter ao menos um bloco catch ou finally correspondente.

O objeto lançado precisa ser uma instância da classe Exception ou uma subclasse de Exception. Tentar lançar um objeto sem essa ascendência resultará em um erro fatal.

#Exemplo de utilização

***execoes.php***
Aqui temos um conjunto de exceções personalizadas para que sua utilização se encaixe melhor dentro de um contexto
```
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
```

**Processamento.php**
Aqui temos uma classe de exemplo que irá lançar exeções conforme a necessidade
```php
require_once('excecoes.php');
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
            $this->gravarDadosWebserviceItau($this->usuario->buscarUsuario());
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
```

**index.php**
Script que faz uso do objeto processamento e faz tratamento das exceções lançadas.

```php
require_once('Processamento.php');
try{ 
    new Processamento();
} catch (ErroGraveException $ex){
    echo 'Erro inesperado: ' . $ex->getMessage();
}
```


Em resumo uma exceção é um recurso para se tomar decisão, tratar fluxo, delegar mensagens de erros para quem for de responsabilidade trata-las.

<br />
Referência: 
* http://php.net/manual/pt_BR/language.exceptions.php
