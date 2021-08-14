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
    excluir_pessoa($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_pessoa($codigo);
    else
        editar_pessoa($codigo);
}

// Métodos para cada operação



function inserir_pessoa($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'pessoa');
    $pessoa = dadosForm_pessoa();

    // Inseri os dados do usuário

    $arrayPessoa = array('nome' => $pessoa->getNome(), 'sobrenome' => $pessoa->getSobrenome(), 'id_endereco' => $pessoa->getId_endereco(), 'nascimento' => $pessoa->getNascimento());
    $retorno   = $crud->insert($arrayPessoa);

    header("location:cad_pessoa.php");
}


function editar_pessoa($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'pessoa');
    $pessoa = dadosForm_pessoa();

    $arrayPessoa = array('nome' => $pessoa->getNome(), 'sobrenome' => $pessoa->getSobrenome(), 'id_endereco' => $pessoa->getId_endereco(), 'nascimento' => $pessoa->getNascimento());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayPessoa, $arrayCond);
    header("location:index_pessoa.php");
}

function excluir_pessoa($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'pessoa');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_pessoa.php");
}


function show_pessoa($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'pessoa');

    $sql        = "SELECT * FROM pessoa WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $pessoa = new Pessoa;
    $pessoa->buildFromObj($dados);
    return $pessoa;
}







// Busca as informações digitadas no form

function dadosForm_pessoa()
{
    $pessoa = new Pessoa;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['nome'] = $_POST['nome'];
    $dados['sobrenome'] = $_POST['sobrenome'];
    $dados['id_endereco'] = $_POST['id_endereco'];
    $dados['nascimento'] = $_POST['nascimento'];
    $pessoa->buildFromArray($dados);
    return $pessoa;
}
