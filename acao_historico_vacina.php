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
    excluir_historico_vacina($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_historico_vacina($codigo);
    else
        editar_historico_vacina($codigo);
}

// Métodos para cada operação



function inserir_historico_vacina($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'historico_vacina');
    $historico_vacina = dadosForm_historico_vacina();

    // Inseri os dados do usuário

    $arrayHistorico_vacina = array('data' => $historico_vacina->getData(), 'id_paciente' => $historico_vacina->getId_paciente(), 'id_enfermeiro' => $historico_vacina->getId_enfermeiro(), 'id_vacina' => $historico_vacina->getId_vacina(),);
    $retorno   = $crud->insert($arrayHistorico_vacina);

    header("location:cad_historico_vacina.php");
}


function editar_historico_vacina($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'historico_vacina');
    $historico_vacina = dadosForm_historico_vacina();

    $arrayHistorico_vacina = array('data' => $historico_vacina->getData(), 'id_paciente' => $historico_vacina->getId_paciente(), 'id_enfermeiro' => $historico_vacina->getId_enfermeiro(), 'id_vacina' => $historico_vacina->getId_vacina(),);
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayHistorico_vacina, $arrayCond);
    header("location:index_historico_vacina.php");
}

function excluir_historico_vacina($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'historico_vacina');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_historico_vacina.php");
}


function show_historico_vacina($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'historico_vacina');

    $sql        = "SELECT * FROM historico_vacina WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $historico_vacina = new Historico_vacina;
    $historico_vacina->buildFromObj($dados);
    return $historico_vacina;
}







// Busca as informações digitadas no form

function dadosForm_historico_vacina()
{
    $historico_vacina = new Historico_vacina;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['data'] = $_POST['data'];

    $dados['id_paciente'] = $_POST['id_paciente'];



    $dados['id_enfermeiro'] = $_POST['id_enfermeiro'];
    $dados['id_vacina'] = $_POST['id_vacina'];

    $historico_vacina->buildFromArray($dados);
    return $historico_vacina;
}
