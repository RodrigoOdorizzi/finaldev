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
    excluir_fabricante($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_fabricante($codigo);
    else
        editar_fabricante($codigo);
}

// Métodos para cada operação



function inserir_fabricante($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'fabricante');
    $fabricante = dadosForm_fabricante();

    // Inseri os dados do usuário

    $arrayFabricante = array('nome' => $fabricante->getNome());
    $retorno   = $crud->insert($arrayFabricante);

    header("location:cad_fabricante.php");
}


function editar_fabricante($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'fabricante');
    $fabricante = dadosForm_fabricante();

    $arrayFabricante = array('nome' => $fabricante->getNome());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayFabricante, $arrayCond);
    header("location:index_fabricante.php");
}

function excluir_fabricante($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'fabricante');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_fabricante.php");
}


function show_fabricante($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'fabricante');

    $sql        = "SELECT * FROM fabricante WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $fabricante = new Fabricante;
    $fabricante->buildFromObj($dados);
    return $fabricante;
}







// Busca as informações digitadas no form

function dadosForm_fabricante()
{
    $fabricante = new Fabricante;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['nome'] = $_POST['nome'];
    $fabricante->buildFromArray($dados);
    return $fabricante;
}
