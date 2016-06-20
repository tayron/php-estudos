# SQL Injection

Injeção direta de comandos SQL é uma técnica onde um atacante cria ou altera comandos SQL existentes para expor dados escondidos, ou sobrescrever dados valiosos, ou ainda executar comandos de sistema perigosos no servidor. Isso é possível se a aplicação pegar a entrada do usuário e combinar com parâmetros estáticos para montar uma consulta SQL.

Para evitar ataques deve-se tratar todos os dados de entrada e que será utilizado em algum sql, pode se tratr estes dados utilizando a função addslashes(), está função adiciona uma barra invertida antes de qualquer aspas simples e duplas.
Outra função seria a mysql_real_escape_string() que escapa os caracteres especiais numa string para usar em um comando SQL, levando em conta o conjunto atual de caracteres. 

Referência: 
   http://php.net/manual/pt_BR/security.database.sql-injection.php
   http://php.net/manual/pt_BR/function.mysql-real-escape-string.php
   http://bazaglia.com/como-evitar-completamente-sql-injection-no-php