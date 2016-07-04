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

1) filter_var ( mixed $variable [[, int $filter [[, mixed $options ]]]] ) - PHP 5 >= 5.2.0, PHP 7
Filtra a variável com um especificado filtro, exemplo:

```php
var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
// string(15) "bob@example.com"

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




2) filter_input ( int $type , string $variable_name [, int $filter [, mixed $options ]] ) - PHP 5 >= 5.2.0, PHP 7
Filtra a variável com um especificado filtro, exemplo:

```php
$search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
$search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);
echo "You have searched for $search_html.\n";
// You have searched for Me &#38; son.

echo "<a href='?search=$search_url'>Search again.</a>";
// <a href='?search=Me%20%26%20son'>Search again.</a>
```

```php
var_dump(filter_input(INPUT_POST, 'var', FILTER_DEFAULT , FILTER_REQUIRE_ARRAY));
```

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



Referência: 
* http://codigofonte.uol.com.br/artigos/utilizando-php-para-validar-dados-passados-pelo-usuario
* http://www.php.net/manual/pt_BR/ref.filter.php
* http://php.net/manual/pt_BR/function.filter-input.php


