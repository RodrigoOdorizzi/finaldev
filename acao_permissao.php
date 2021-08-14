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
    excluir_permissao($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_permissao($codigo);
    else
        editar_permissao($codigo);
}

// Métodos para cada operação



function inserir_permissao($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'permissao');
    $permissao = dadosForm_permissao();

    // Inseri os dados do usuário

    $arrayPermissao = array('nome' => $permissao->getNome());
    $retorno   = $crud->insert($arrayPermissao);

    header("location:cad_permissao.php");
}


function editar_permissao($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'permissao');
    $permissao = dadosForm_permissao();

    $arrayPermissao = array('nome' => $permissao->getNome());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayPermissao, $arrayCond);
    header("location:index_permissao.php");
}

function excluir_permissao($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'permissao');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_permissao.php");
}


function show_permissao($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'permissao');

    $sql        = "SELECT * FROM permissao WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $permissao = new Permissao;
    $permissao->buildFromObj($dados);
    return $permissao;
}




// Busca as informações digitadas no form

function dadosForm_permissao()
{
    $permissao = new Permissao;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['nome'] = $_POST['nome'];
    $permissao->buildFromArray($dados);
    return $permissao;
}
