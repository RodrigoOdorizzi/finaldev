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
    excluir_cidade($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_cidade($codigo);
    else
        editar_cidade($codigo);
}

// Métodos para cada operação





function inserir_cidade($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'cidade');
    $cidade = dadosForm_cidade();

    // Inseri os dados do usuário

    $arrayCidade = array('id_state' => $cidade->getId_state(), 'nome' => $cidade->getNome(), 'populacao' => $cidade->getPopulacao());
    $retorno   = $crud->insert($arrayCidade);

    header("location:cad_cidade.php");
}




function editar_cidade($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'cidade');
    $cidade = dadosForm_cidade();

    $arrayCidade = array('nome' => $cidade->getNome(), 'id estado' => $cidade->getId_state(), 'populacao' => $cidade->getPopulacao());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayCidade, $arrayCond);
    header("location:index_cidade.php");
}

function excluir_cidade($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'cidade');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_cidade.php");
}


function show_cidade($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'cidade');

    $sql        = "SELECT * FROM cidade WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $cidade = new Cidade;
    $cidade->buildFromObj($dados);
    return $cidade;
}








// Busca as informações digitadas no form



function dadosForm_cidade()
{
    $cidade = new Cidade;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['nome'] = $_POST['nome'];
    $dados['populacao'] = $_POST['populacao'];
    $dados['id_state'] = $_POST['id_state'];
    $cidade->buildFromArray($dados);
    return $cidade;
}
