<?php
// Sql normal
$nome = 'Pedro';
$email = 'pedro@oi.com.br';
$senha = '123456';

$sql = "insert into usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}'";

// Provocando um erro para tentar objter o nome da tabela de usuários
$nome = 'Pedro';
$email = 'pedro@oi.com.br';
$senha = "123456'asdfasdfasdfasdfasdf";

$sql = "insert into usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}'";


// Apagando todos os registros de usuários do sistema através do sql injectin
$nome = 'Pedro';
$email = 'pedro@oi.com.br';
$senha = "123456'; truncate table usuarios;";

$sql = "insert into usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}'";


// Como poderia ser evitado
$nome = 'Pedro';
$email = 'pedro@oi.com.br';
$senha = "123456'; truncate table usuarios;";

$sql = "insert into usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}'";


// Utilizando objeto PDO para executar as querys no banco
// Usamos o bindParam para atribuir as variáveis ao resto da query. Se alguma irregularidade existir, 
// o MySQL não concluirá a query
$nome = 'Pedro';
$email = 'pedro@oi.com.br';
$senha = "123456'; truncate table usuarios;";

$sql= "insert into usuarios set nome = ':nome', email = ':email', senha = ':senha'"; 
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':senha', $senha, PDO::PARAM_INT);
$stmt->execute();