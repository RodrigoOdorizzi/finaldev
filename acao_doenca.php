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
    excluir_doenca($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_doenca($codigo);
    else
        editar_doenca($codigo);
}

// Métodos para cada operação



function inserir_doenca($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'doenca');
    $doenca = dadosForm_doenca();

    // Inseri os dados do usuário

    $arrayDoenca = array('nome' => $doenca->getNome());
    $retorno   = $crud->insert($arrayDoenca);

    header("location:cad_doenca.php");
}


function editar_doenca($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'doenca');
    $doenca = dadosForm_doenca();

    $arrayDoenca = array('nome' => $doenca->getNome());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayDoenca, $arrayCond);
    header("location:index_doenca.php");
}

function excluir_doenca($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'doenca');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_doenca.php");
}


function show_doenca($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'doenca');

    $sql        = "SELECT * FROM doenca WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $doenca = new Doenca;
    $doenca->buildFromObj($dados);
    return $doenca;
}







// Busca as informações digitadas no form

function dadosForm_doenca()
{
    $doenca = new Doenca;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['nome'] = $_POST['nome'];
    $doenca->buildFromArray($dados);
    return $doenca;
}
