<?php
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";
// include_once "conf/default.inc.php";

$acao = '';
$codigo = '';
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET': {
            $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
            $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : 0;
        }
        break;
    case 'POST': {
            $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
            $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
        }
        break;
}

if ($acao == "excluir") {
    excluir_estado($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_estado($codigo);
    else
        editar_estado($codigo);
}

// Métodos para cada operação



function inserir_estado($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'estado');
    $estado = dadosForm_estado();

    // Inseri os dados do usuário

    $arrayEstado = array('nome' => $estado->getNome(), 'Uf' => $estado->getUf());
    $retorno   = $crud->insert($arrayEstado);

    header("location:cad_estado.php");
}


function editar_estado($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'estado');
    $estado = dadosForm_estado();

    $arrayEstado = array('nome' => $estado->getNome(), 'Uf' => $estado->getUf());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayEstado, $arrayCond);
    header("location:index_estado.php");
}

function excluir_estado($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'estado');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_estado.php");
}


function show_estado($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'estado');

    $sql        = "SELECT * FROM estado WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $estado = new Estado;
    $estado->buildFromObj($dados);
    return $estado;
}







// Busca as informações digitadas no form

function dadosForm_estado()
{
    $estado = new Estado;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['nome'] = $_POST['nome'];
    $dados['uf'] = $_POST['uf'];
    $estado->buildFromArray($dados);
    return $estado;
}
