# Escape Outuput

Toda exibição de dados na tela deve ser tratada para que nenhum código malicioso incluso seja executado,
para isso o PHP oferece funções de tratamento de string como htmlspecialchars, htmlentities que convertem 
todos os caracteres que fazem parte de comandos a serem executados em caracteres especiais.

<br />

Exemplo:

* '&' (ampersand) torna-se '&amp;'
* '"' (aspas dupla) torna-se '&quot;'
* ''' (aspas simples) torna-se '&#039;'
* '<' (menor que) torna-se '&lt;'
* '>' (maior que) torna-se '&gt;'

<br />

Exemplo #1 htmlspecialchars() exemplo


```php
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt; 
```

No exemplo acima não aparecerá um link na pagina para o usuário mas sim o texto 
exatamente como ele está armazenado na string: <a href='test'>Test</a>;


Referências:

 * http://php.net/manual/pt_BR/function.htmlspecialchars.php
