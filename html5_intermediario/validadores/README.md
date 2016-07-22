#Validadores

O HTML5 trouxe diversas possibilidades e principalmente facilidades para os desenvolvedores, 
uam delas é a validação dos campos de formulários, que antes era feito com javascript hoje 
podemos fazer usando somente o HTML e em um tempo bem menor.

HTML5 inclui um mecanismo bastante sólido na validação de formulários com base nos atributos 
da tag input:  type, pattern e require. Graças a esses novos atributos, você pode delegar 
algumas funções de verificação de dados para o navegador.

# Atributo Type

Esse atributo indica o tipo de controle de entrada de dados como o popular 
```<input type="text">``` para manipulação de dados de texto simples.

Alguns typos de input herdam validação sem a necessidade de termos que implementa-los, 
para conhecer alguns deles basta acessar a sessão de 
[Tipos de Dados](https://github.com/tayron/estudos/tree/master/html5_intermediario/tipo_de_dados). 


# Atributo pattern

O atributo ```pattern``` especifica um formato (na forma de expressão 
regular do JavaScript) em que o valor do campo é testado.

Expressões regulares são uma linguagem usada para analisar e manipular texto. 
Elas são frequentemente utilizadas para executar operações complexas de search-and-replace, 
e para garantir que os dados de texto estão corretos.

Hoje em dia, as expressões regulares estão incluídas na maioria das linguagens de 
programação, assim como em muitas linguagens de script, editores, aplicações, 
bancos de dados e ferramentas de linha de comando.

**Exemplos de validação usando expressão regular**

1. O exemplo abaixo valida se o valor informado pelo usuário possui o formato 99999-999 
conforme a expressão regular definida no atributo pattern.

```php
<input id="cep" name="cep" pattern="\d{5}-\d{3}" maxlength='9' title="O campo deve conter 9 digitos no formato 99999-999">
```

<br />

2. O exemplo abaixo valida se o valor informado pelo usuário possui o tamanho mínimo de 3 caracteres.
```php
<input pattern=".{3,}" required title="3 characters minimum">
```

<br />

3. O exemplo abaixo valida se o valor informado pelo usuário possui o tamanho entre 5 à 10 caracteres.
```php
<input pattern=".{5,10}" required title="O valor deve possuir entre 5 à 10 caracteres">
```

# Exemplo de um formulário de contato utilizando validadores do HTML5

```php
<form action="" autocomplete="off">
<label for="username2">Username</label>
<input id="username2" name="username" pattern="[a-zA-Z0-9]{5,}" title="Minmimum 5 letters or numbers." required>

<label for="password2">Password</label>
<input id="password2" name="password" type="password" pattern=".{5,}" title="Minmimum 5 letters or numbers." required>

<label for="email">Email</label>
<input id="email" name="email" type="email" required>

<label for="url">Homepage</label>
<input id="url" name="url" type="url">

<input type="submit" class="btn" value="Register">
</form>
```

<br />
Referências:

* http://tableless.com.br/validacao-de-formularios-com-html5