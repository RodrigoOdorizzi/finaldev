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
    excluir($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir($codigo);
    else
        editar($codigo);
}

// Métodos para cada operação



function inserir($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'usuario');
    $usuario = dadosForm();

    // Inseri os dados do usuário

    $arrayUser = array('user' => $usuario->getUser(), 'senha' => $usuario->getSenha(), 'id_permissao' => $usuario->getId_permissao());
    $retorno   = $crud->insert($arrayUser);

    header("location:cad.php");
}



function inserir_cidade($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'cidade');
    $cidade = dadosForm_cidade();

    // Inseri os dados do usuário

    $arrayCidade = array('id_state' => $cidade->getId_state(), 'nome' => $cidade->getNome(), 'populacao' => $cidade->getPopulacao());
    $retorno   = $crud->insert($arrayCidade);

    header("location:cad_cidad.php");
}

function editar($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'usuario');
    $usuario = dadosForm();

    $arrayUser = array('user' => $usuario->getUser(), 'senha' => $usuario->getSenha(), 'id_permissao' => $usuario->getId_permissao());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayUser, $arrayCond);
    header("location:index.php");
}

function excluir($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'usuario');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index.php");
}

function show($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'usuario');

    $sql        = "SELECT * FROM usuario WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $usuario = new Usuario;
    $usuario->buildFromObj($dados);
    return $usuario;
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

function dadosForm()
{
    $usuario = new Usuario;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['user'] = $_POST['user'];
    $dados['senha'] = $_POST['senha'];
    $dados['id_permissao'] = $_POST['id_permissao'];
    $usuario->buildFromArray($dados);
    return $usuario;
}


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
