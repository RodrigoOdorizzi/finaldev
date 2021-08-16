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
    excluir_vacina($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_vacina($codigo);
    else
        editar_vacina($codigo);
}

// Métodos para cada operação



function inserir_vacina($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'vacina');
    $vacina = dadosForm_vacina();

    // Inseri os dados do usuário

    $arrayVacina = array('nome' => $vacina->getNome(), 'nome' => $vacina->getNome(), 'id_doenca' => $vacina->getId_doenca(), 'id_fabricante' => $vacina->getId_fabricante(), 'lote' => $vacina->getLote());
    $retorno   = $crud->insert($arrayVacina);

    header("location:cad_vacina.php");
}


function editar_vacina($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'vacina');
    $vacina = dadosForm_vacina();

    $arrayVacina = array('nome' => $vacina->getNome(), 'nome' => $vacina->getNome(), 'id_doenca' => $vacina->getId_doenca(), 'id_fabricante' => $vacina->getId_fabricante(), 'lote' => $vacina->getLote());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayVacina, $arrayCond);
    header("location:index_vacina.php");
}

function excluir_vacina($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'vacina');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_vacina.php");
}


function show_vacina($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'vacina');

    $sql        = "SELECT * FROM vacina WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $vacina = new Vacina;
    $vacina->buildFromObj($dados);
    return $vacina;
}







// Busca as informações digitadas no form

function dadosForm_vacina()
{
    $vacina = new Vacina;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['nome'] = $_POST['nome'];
    $dados['id_doenca'] = $_POST['id_doenca'];
    $dados['id_fabricante'] = $_POST['id_fabricante'];
    $dados['lote'] = $_POST['lote'];
    $vacina->buildFromArray($dados);
    return $vacina;
}
