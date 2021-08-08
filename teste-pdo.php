<?php 
 require_once "conf/Conexao.class.php";  
 require_once "conf/Crud.class.php"; 
 require_once "autoload.php";
 
 // Consumindo métodos do CRUD genérico 
 
 // Atribui uma conexão PDO   
 $pdo = Conexao::getInstance();  
 
 // Atribui uma instância da classe Crud, passando como parâmetro a conexão PDO e o nome da tabela  
 $crud = Crud::getInstance($pdo, 'marca');  
 
 $marca1 = new Marca;
 $marca1->setDescricao("Novo João - DAO Generic");

 // Teste de Inserção
 $arrayUser = array('descricao' => $marca1->getDescricao());  
 $retorno   = $crud->insert($arrayUser);  
 
 
 ?>