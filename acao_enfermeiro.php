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
    excluir_enfermeiro($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_enfermeiro($codigo);
    else
        editar_enfermeiro($codigo);
}

// Métodos para cada operação



function inserir_enfermeiro($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'enfermeiro');
    $enfermeiro = dadosForm_enfermeiro();

    // Inseri os dados do usuário

    $arrayEnfermeiro = array('id_pessoa' => $enfermeiro->getId_pessoa(), 'id_user' => $enfermeiro->getId_user());
    $retorno   = $crud->insert($arrayEnfermeiro);

    header("location:cad_enfermeiro.php");
}


function editar_enfermeiro($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'enfermeiro');
    $enfermeiro = dadosForm_enfermeiro();

    $arrayEnfermeiro = array('id_pessoa' => $enfermeiro->getId_pessoa(), 'id_user' => $enfermeiro->getId_User());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayEnfermeiro, $arrayCond);
    header("location:index_enfermeiro.php");
}

function excluir_enfermeiro($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'enfermeiro');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_enfermeiro.php");
}


function show_enfermeiro($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'enfermeiro');

    $sql        = "SELECT * FROM enfermeiro WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $enfermeiro = new Enfermeiro;
    $enfermeiro->buildFromObj($dados);
    return $enfermeiro;
}







// Busca as informações digitadas no form

function dadosForm_enfermeiro()
{
    $enfermeiro = new Enfermeiro;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['id_pessoa'] = $_POST['id_pessoa'];
    $dados['id_User'] = $_POST['id_User'];
    $enfermeiro->buildFromArray($dados);
    return $enfermeiro;
}
