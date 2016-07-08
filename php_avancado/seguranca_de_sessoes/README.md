#Segurança de Sessões

 O módulo das sessões não pode garantir que a informação que você guarda em uma sessão será visto somente pelo usuário que criou a sessão. Você precisa tomar medidas adicionais de segurança para proteger ativamente a integridade da sessão, dependendo do valor dos dados.

Meça a importância dos dados carregados pelas suas sessões e tome medidas adicionais de proteção -- isto normalmente vem com um preço, menos conveniência para o usuário. Por exemplo, se você quiser proteger os usuários de táticas simples de engenharia social, você deve ativar session.use_only_cookies. Neste caso, os cookies devem estar ativados incondicionalmente do lado do usuário ou as sessões não irão funcionar.

Existem várias maneiras de vazar um id de uma sessão para terceiros. Um id de sessão vazado permite a terceiros acessar a todos os recursos que estão associados ao id específico. Primeiro, URLs carregando ids de sessão. Se você criar um link com um site externo, a URL inclusa no id de sessão deve ser guardada nos logs de referência do site externo. Segundo, um ataque mais ativo pode escutar ao seu tráfego de rede. Se ele não for criptografado, os ids de sessão irão passar como texto simples pela sua rede. A solução aqui é implementar SSL em seu servidor e tornar obrigatório para os seus usuários. 

<br />
Referência: 
* http://php.net/manual/pt_BR/session.security.php
