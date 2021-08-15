<?php
// Banco de Dados
error_reporting(0);

define('HOST', 'localhost');
define('DBNAME', 'vacinatechh');
define('USER', 'root');
define('PASSWORD', '');

define('DRIVER', 'mysql');
define('CHARSET', 'utf8');

// Geral da Aplicação
define('NOME_DO_PROJETO', 'CRUD-01-R');
define('DESCRICAO_DO_PROJETO', 'Um Pequeno exemplo usando PDO');

// Banco de Dados para configuração
$url = HOST; // IP do host
$dbname = DBNAME; // Nome do database
$usuario = USER; // Usuário do database
$password = PASSWORD; // Senha do database

// Tabelas do Banco de Dados
$tb_login = "usuario";
