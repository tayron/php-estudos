# Escape Outuput

Toda exibição de dados na tela deve ser tratada para que nenhum código malicioso incluso seja executado,
para isso o PHP oferece funções de tratamento de string como htmlspecialchars, htmlentities que convertem 
todos os caracteres que fazem parte de comandos a serem executados em caracteres especiais.

Exemplo:

* '&' (ampersand) torna-se '&amp;'
* '"' (aspas dupla) torna-se '&quot;'
* ''' (aspas simples) torna-se '&#039;'
* '<' (menor que) torna-se '&lt;'
* '>' (maior que) torna-se '&gt;'

Exemplo #1 htmlspecialchars() exemplo


```php
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt; 
```

No exemplo acima não aparecerá um link na pagina para o usuário mas sim o texto 
exatamente como ele está armazenado na string: <a href='test'>Test</a>;

É possível utilizar expressões regulares para tratar uma saída, condicionais, funções como
strlen(), is_null entre outras disponíveis no PHP. De acordo com a necessidade o 
PHP disponibiliza vários recursos para tratamento desses dados para que seja seja 
exibida corretamente para o usuário evitando que algum código maliciodo armazenado nesta
estring não seja processada, ou que determinada informação apareça corretamente ou que ela 
apareceça apenas se determinada condição for atendida.

<br />

Referências:

 * http://php.net/manual/pt_BR/function.htmlspecialchars.php
