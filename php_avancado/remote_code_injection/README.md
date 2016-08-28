# Remote Code Injection | Code Injection | Remove File Inclusion | PHP Injection

Injeção de código refere-se a qualquer meio que permite a um invasor injetar código-fonte em uma aplicação web de tal forma que é interpretado e executado. Isto não se aplica ao código injetado em um cliente da aplicação, por exemplo, Javascript, que em vez cai sob o domínio do Cross-Site Scripting (XSS).

O código-fonte pode ser injetado diretamente de uma entrada não confiável ou o aplicativo web pode ser manipulado para carregá-lo a partir do sistema de arquivos local ou a partir de uma fonte externa de tal URL. Quando um Código de injecção ocorre como resultado da inclusão de um recurso externo é comumente referido como uma inclusão remota de arquivos, embora em si um ataque RFI sempre precisa ter a intenção de injetar código.

As principais causas de Código de injecção são falhas entrada de validação, a inclusão de entrada não confiável em qualquer contexto onde a entrada pode ser avaliada como código PHP, falhas para assegurar repositórios de código-fonte, falhas de cautela no download de bibliotecas de terceiros, e erros de configuração de servidor que permitem que arquivos não-PHP a serem passados ​​para o interpretador PHP pelo servidor web. Particular atenção deve ser dada ao ponto final, uma vez que significa que todos os arquivos carregados para o servidor, os usuários não confiáveis ​​podem representar um risco significativo.

# Exemplos de Código Injecção
PHP é bem conhecida por permitindo uma infinidade de alvos de injeção de código, garantindo que Código de injecção permanece elevada na lista de observação de qualquer programador.

# Inclusão de arquivos
O alvo mais óbvio para um ataque de injeção de código são as funções include(), include_once(), require() e require_once(). Se a entrada não confiável é permitido para determinar o parâmetro de caminho passado para essas funções é possível influenciar qual arquivo local será incluído. Deve notar-se que o arquivo incluído não precisa ser um arquivo PHP real; qualquer arquivo incluído que é capaz de transportar dados textuais (por exemplo, quase nada) é permitido.

O parâmetro de caminho também podem ser vulneráveis ​​a uma passagem de diretório ou inclusão remota de arquivos. Usando a seqüência de ../ ou .. (ponto-ponto-slash) em um caminho permite que um atacante para navegar para quase qualquer arquivo acessível para o processo PHP.

<br />

Referência: 
 * http://phpsecurity.readthedocs.io/en/latest/Injection-Attacks.html#code-injection-also-remote-file-inclusion
