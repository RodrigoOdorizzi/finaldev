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
    excluir_user($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0)
        inserir_user($codigo);
    else
        editar_user($codigo);
}



function inserir_user($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'usuario');
    $usuario = dadosForm_user();

    // Inseri os dados do usuário

    $arrayUser = array('user' => $usuario->getUser(), 'senha' => $usuario->getSenha(), 'id_permissao' => $usuario->getId_permissao(), 'nome ' => $usuario->getNome());
    $retorno   = $crud->insert($arrayUser);

    header("location:cad_2.php");
}




function editar_user($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'usuario');
    $usuario = dadosForm_user();

    $arrayUser = array('user' => $usuario->getUser(), 'senha' => $usuario->getSenha(), 'id_permissao' => $usuario->getId_permissao(), 'nome ' => $usuario->getNome());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayUser, $arrayCond);
    header("location:index_2.php");
}



function excluir_user($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'usuario');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_2.php");
}


function show_user($id)
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




// Busca as informações digitadas no form

function dadosForm_user()
{
    $usuario = new Usuario;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['user'] = $_POST['user'];
    $dados['senha'] = $_POST['senha'];
    $dados['id_permissao'] = $_POST['id_permissao'];
    $dados['nome'] = $_POST['nome'];
    $usuario->buildFromArray($dados);
    return $usuario;
}
