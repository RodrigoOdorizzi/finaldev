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
    excluir_paciente($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_paciente($codigo);
    else
        editar_paciente($codigo);
}

// Métodos para cada operação



function inserir_paciente($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'paciente');
    $paciente = dadosForm_paciente();

    // Inseri os dados do usuário

    $arrayPaciente = array('id_usuario'  => $paciente->getId_usuario(), 'id_pessoa' => $paciente->getId_pessoa());
    $retorno   = $crud->insert($arrayPaciente);

    header("location:cad_paciente.php");
}


function editar_paciente($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'paciente');
    $paciente = dadosForm_paciente();

    $arrayPaciente = array('id_usuario'  => $paciente->getId_usuario(), 'id_pessoa' => $paciente->getId_pessoa());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayPaciente, $arrayCond);
    header("location:index_paciente.php");
}

function excluir_paciente($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'paciente');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_paciente.php");
}


function show_paciente($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'paciente');
    $sql        = "SELECT * FROM paciente WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $paciente = new Paciente;
    $paciente->buildFromObj($dados);
    return $paciente;
}







// Busca as informações digitadas no form

function dadosForm_paciente()
{
    $paciente = new Paciente;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['id_usuario'] = $_POST['id_usuario'];
    $dados['id_pessoa'] = $_POST['id_pessoa'];
    $paciente->buildFromArray($dados);
    return $paciente;
}
