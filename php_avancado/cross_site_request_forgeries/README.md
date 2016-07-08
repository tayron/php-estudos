#Cross Site Request Forgeries


O CSRF (do inglês Cross-site request forgery- Falsificação de solicitação entre sites) é um tipo de ataque informático malicioso a um website no qual comandos não autorizados são transmitidos através de um utilizador em quem o website confia.[1] Em contraste com o cross-site scripting (XSS), que explora a confiança de um utilizador para um site particular, o CSRF explora a confiança que um website tem do navegador do usuário.

# As seguintes características são comuns ao CSRF:

* Envolvem sites que dependem de uma identificação do usuário
* Exploram a confiança do site nessa identificação
* Iludem o navegador do usuário para o envio de solicitações HTTP para um site de destino
* Envolvem solicitações HTTP que têm efeitos colaterais

Os riscos são as aplicações Web que executam ações com base na confiança e autenticação das entradas dos usuários, sem exigir que o usuário autorize a ação específica. Um usuário que é autenticado por um cookie guardado no navegador web do usuário, sem saber, pode enviar um pedido HTTP a um site que confia no usuário e, assim, fazer uma ação indesejada.

Ataques CSRF em tags de imagem muitas vezes são feitas a partir de fóruns na Internet, onde os usuários têm permissão para postar imagens, mas não JavaScript.

# Há algumas medidas para impedir CSRF disponíveis:

* Exigindo um segredo, específico do token do usuário em todas os formulários de submissões e o efeito colateral das URLs impedem o CSRF; o site do invasor não pode colocar o token direto nas suas alegações [5]
* Exigir que o cliente forneça dados de autenticação na solicitação HTTP mesmo se utilizado para realizar qualquer operação com implicações de segurança (transferência de dinheiro, etc)
* Limitar o tempo de vida de cookies da sessão
* Verificando o cabeçalho HTTP Referer
* Assegurando que não há nenhum arquivo clientaccesspolicy.xml para a concessão de acesso não intencional aos controles Silverlight[13]
* Assegurando que não há nenhum arquivo crossdomain.xml concedendo acesso não intencional de vídeos em Flash [14]
* Verificando que o cabeçalho da solicitação contém um X-Requested-With. Usado por Ruby on Rails (anterior ao v2.0) e Django (anterior ao v1.2.5). Essa proteção tem sido comprovada como não segura[15] sob uma combinação de plugins do navegador e redirecionamento, o que pode permitir que um invasor forneça cabeçalhos HTTP personalizados em uma solicitação para qualquer site, portanto, permite um pedido forjado.

<br />

Referência: 
* https://pt.wikipedia.org/wiki/Cross-site_request_forgery
