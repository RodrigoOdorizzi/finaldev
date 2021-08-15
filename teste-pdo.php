<?php
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";

// Consumindo métodos do CRUD genérico 

// Atribui uma conexão PDO   
$pdo = Conexao::getInstance();

// Atribui uma instância da classe Crud, passando como parâmetro a conexão PDO e o nome da tabela  
$crud = Crud::getInstance($pdo, 'usuario');

$usuario1 = new Usuario;
$usuario1->setUser("Novo Usuario");

// Teste de Inserção
$arrayUser = array('user' => $usuario1->getUser());
$retorno   = $crud->insert($arrayUser);
