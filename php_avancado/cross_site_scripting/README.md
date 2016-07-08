#Cross-site scripting

Cross-site scripting (XSS) é um tipo de vulnerabilidade do sistema de segurança de um computador, encontrado normalmente em aplicações web que activam ataques maliciosos ao injectarem client-side script dentro das páginas web vistas por outros usuários. Um script de exploração de vulnerabilidade cross-site pode ser usado pelos atacantes para escapar aos controles de acesso que usam a política de mesma origem.

Através de um XSS, o cracker injeta códigos JavaScript em um campo texto de uma página já existente e este JavaScript é apresentado para outros usuários, porque persiste na página.

Exemplo de ataque: Imaginem que o cracker insira, em um fórum de um website alvo de ataque, um texto que contenha um trecho de JavaScript. Este JavaScript poderia, por exemplo, simular a página de login do site, capturar os valores digitados e enviá-los a um site que os armazene. Quando o texto do fórum for apresentado a outros usuários, um site atacado pelo XSS exibirá o trecho de JavaScript digitado anteriormente nos browsers de todos os outros usuários, provocando a brecha de ataque.

O invasor envia um script para o servidor:<script>malicious.js... = SYN onde o servidor recebe o script e interpreta uma nova página inserindo o código como resposta da requisição ao atacante = SYN/ACK.

Por fim, o atacante recebe a resposta em seu browser = ACK

Nota: Se você estiver usando plugins/extensões em seu navegador como: NoScript ou o Google chrome com o "XSS Auditor" habilitado, os ataques de Cross Site Scripting em sites que estejam vulneráveis não irão funcionar.



#Proteção

Apesar de várias ocorrências de XSS e das diferentes formas de exploração, impedir a própria vulnerabilidade é conceitualmente simples. O que a torna problemática na prática é a dificuldade de identificar todos os campos da aplicação onde há dados manipulados pelo usuário e que serão posteriormente exibidos em tela. A causa do XSS refletido e persistente é que estes dados são inseridos em respostas da aplicação sem validação. Para eliminar tais vulnerabilidades, o primeiro passo é identificar todas as instâncias dentro da aplicação em que os dados são colocados nas respostas das requisições. Uma vez identificados os locais destes dados, é necessário realizar os seguintes procedimentos:

1) Validação de Entrada
2) Validação de Saída



Referência: https://pt.wikipedia.org/wiki/Cross-site_scripting