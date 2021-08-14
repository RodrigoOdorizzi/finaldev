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
    excluir_endereco($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_endereco($codigo);
    else
        editar_endereco($codigo);
}

// Métodos para cada operação



function inserir_endereco($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'endereco');
    $endereco = dadosForm_endereco();

    // Inseri os dados do usuário

    $arrayEndereco = array('Id cidade' => $endereco->getId_cidade(), 'Rua' => $endereco->getRua(), 'Bairro' => $endereco->getBairro(), 'Numero_casa' => $endereco->getNumerocasa());
    $retorno   = $crud->insert($arrayEndereco);

    header("location:cad_endereco.php");
}


function editar_endereco($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'endereco');
    $endereco = DadosForm_endereco();

    $arrayEndereco = array('Id cidade' => $endereco->getId_cidade(), 'Rua' => $endereco->getRua(), 'Bairro' => $endereco->getBairro(), 'Numero_casa' => $endereco->getNumerocasa());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayEndereco, $arrayCond);
    header("location:index_endereco.php");
}

function excluir_endereco($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'endereco');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_endereco.php");
}

function show_endereco($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'endereco');

    $sql        = "SELECT * FROM endereco WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $endereco = new Endereco;
    $endereco->buildFromObj($dados);
    return $endereco;
}






// Busca as informações digitadas no form


function dadosForm_endereco()
{
    $endereco = new Endereco;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['id_cidade'] = $_POST['id_cidade'];
    $dados['rua'] = $_POST['rua'];
    $dados['bairro'] = $_POST['bairro'];
    $dados['numerocasa'] = $_POST['numerocasa'];


    $endereco->buildFromArray($dados);
    return $endereco;
}
