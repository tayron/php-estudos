# Input Filtering

Entrada de dados, são todas os dados informados para o sistema através de uma interação externa, 
seja ela feita por uma pessoa, um sistema ou um script.

Este dados muitas vezes podem ser informados de forma errada por inocência ou por malícia e devem 
sempre passar por uma validação.

O PHP por sua fez dispões de alguns recursos para ajudar nesta validação. 
Estas funções são um interessante complemento à validação de dados feita no lado cliente, geralmente com JavaScript. 
Validando os dados no lado do servidor, é possível impedir que usuários mal-intencionados 
explorem brechas na validação do lado cliente para provocar danos no sistema. Além disso, 
vários dos filtros existentes simplificam o processo de validação, 
que geralmente é feito com funções e expressões regulares complexas. e são elas:

# 1) filter_var ( mixed $variable [[, int $filter [[, mixed $options ]]]] )
Filtra a variável com um especificado filtro, exemplo:

```php
var_dump(filter_var('pedo@exemplo.com.br', FILTER_VALIDATE_EMAIL));
// string(15) "pedo@exemplo.com.br"

var_dump(filter_var('10.5', FILTER_VALIDATE_INT));
// bool(false) 

var_dump(filter_var('10.5', FILTER_VALIDATE_FLOAT));
// float(10.5) 
```

Do mesmo grupo de filtros  temos também:
* filter_has_var — Verifica se a variável é de um especificado tipo existente
* filter_id — Retorna o ID de um dado nome de filtro
* filter_input_array — Obtem variáveis externas e opcionalmente as filtra
* filter_input — Obtem a específica variável externa pelo nome e opcionalmente a filtra
* filter_list — Retorna a lista de todos filtros suportados
* filter_var_array — Obtêm múltiplas variáveis e opcionalmente as filtra


# 2) filter_input ( int $type , string $variable_name [, int $filter [, mixed $options ]] )
Filtra a variável com um especificado filtro, exemplo:

Exemplo 1:
```php
$search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
$search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);
echo "Você pesquisou por $search_html.\n";
// Você pesquisou por &#38;.

echo "<a href='?search=$search_url'>Procurar novamente.</a>";
// <a href='?search=Me%20%26%20son'>Procurar novamente.</a>
```

Exemplo 2:
```php
var_dump(filter_input(INPUT_POST, 'var', FILTER_DEFAULT , FILTER_REQUIRE_ARRAY));
```

Exemplo 3:
```php
class myValidator
{
  public function username($value)
  {
    // return username or boolean false
  }
}

$myValidator = new myValidator;
$options = array('options' => array($myValidator, 'username'));
$username = filter_input(INPUT_GET, 'username', FILTER_CALLBACK, $options);
var_dump($username);
```

Do mesmo grupo de filtros  temos também:
* filter_var() - Filtra a variável com um especificado filtro
* filter_input_array() - Obtem variáveis externas e opcionalmente as filtra
* filter_var_array() - Obtêm múltiplas variáveis e opcionalmente as filtra

# 2) isset, is_null, etc...
É comum ver dados de serem validados utilizando funções e expressões que verifica 
se um deteminado dado foi passado em branco, nulo, etc...

```php
if(!in_array($_POST['nome'], null, " ")){
  // O campo nome do formulário foi preenchido
}else{
  // O campo nome do formulário não foi preenchido
}

$emailValido = emailValido($_POST['email']);
if($emailValido){
  // Email válido
}else{
  // Email inválido
}

if($_POST['telefone'] !== null){
 // Telefone informado
}

```

Existe outras formas de filtrar os dados como htmlspecialchars, htmlentities que substituem códigos html por caracteres especiais.
Ambas as funções funcionam de forma semelhante exceto que htmlentities() todos caracteres que tem entidade HTML equivalente são convertidos para estas entidades.
Para decodificar use html_entity_decode().

```php
$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;    
```

<br />

Referências: 

* http://codigofonte.uol.com.br/artigos/utilizando-php-para-validar-dados-passados-pelo-usuario
* http://www.php.net/manual/pt_BR/ref.filter.php
* http://php.net/manual/pt_BR/function.filter-input.php
* http://php.net/manual/pt_BR/function.htmlentities.php
* http://php.net/manual/pt_BR/function.htmlspecialchars.php
