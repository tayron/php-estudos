# SQL Injection

Injeção direta de comandos SQL é uma técnica onde um atacante cria ou altera comandos SQL existentes para expor dados escondidos, ou sobrescrever dados valiosos, ou ainda executar comandos de sistema perigosos no servidor. Isso é possível se a aplicação pegar a entrada do usuário e combinar com parâmetros estáticos para montar uma consulta SQL.

 * Para evitar ataques deve-se tratar todos os dados de entrada que será utilizado em algum SQL, pode se tratar estes dados utilizando a função addslashes(), está função adiciona uma barra invertida antes de qualquer aspas simples e duplas.

 * Deve-se desabilitar os erros no servidor em produção de forma que se consiga apenas visualiza-los através de arquivos de logs.

 * A função mySQL_real_escape_string() que escapa os caracteres especiais numa string para usar em um comando SQL, levando em conta o conjunto atual de caracteres.

 * Outra opção é utilizar o objeto PDO para executar as SQLs, pois usa-se o método bindParam para setar parametros nas query que serão executadas, se alguma irregularidade existir o MySQL não executará a query.

<br />

1) Exemplo de inserção de parametros sem tratamento:

```php
$nome = 'Pedro';
$email = 'pedro@oi.com.br';
$senha = '123456';

$SQL = "insert into usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}'";
```

<br />
2) Exemplo de inserção de parametros para se tentar provocar um erro de SQL com o intuito de tentar descobrir o nome da tabela:

```php
// Provocando um erro para tentar obter o nome da tabela de usuários
$nome = 'Pedro';
$email = 'pedro@oi.com.br';
$senha = "123456'asdfasdfasdfasdfasdf";

$SQL = "insert into usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}'";
```

<br />

3) Apagando todos os registros de usuários do sistema através do SQL injection:

```php
$nome = 'Pedro';
$email = 'pedro@oi.com.br';
$senha = "123456'; truncate table usuarios;";

$SQL = "insert into usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}'";
```

<br />

4) Como poderia ser evitado utilizando a função mySQL_real_escape_string():
```php
$nome = mySQL_real_escape_string('Pedro');
$email = mySQL_real_escape_string('pedro@oi.com.br');
$senha = mySQL_real_escape_string("123456'; truncate table usuarios;");

$SQL = "insert into usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}'";
```

<br />

5) Utilizando objeto PDO para executar as querys no banco:

```php
$nome = 'Pedro';
$email = 'pedro@oi.com.br';
$senha = "123456'; truncate table usuarios;";

$SQL= "insert into usuarios set nome = ':nome', email = ':email', senha = ':senha'"; 
$stmt = $pdo->prepare($SQL);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':senha', $senha, PDO::PARAM_INT);
$stmt->execute();
```

<br />
Referências:

 * http://php.net/manual/pt_BR/security.database.SQL-injection.php
 * http://php.net/manual/pt_BR/function.mySQL-real-escape-string.php
 * http://bazaglia.com/como-evitar-completamente-SQL-injection-no-php