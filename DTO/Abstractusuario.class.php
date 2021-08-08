<?php

require_once "autoload.php";

abstract class Abstractusuario extends  AbsClassCodigo
{

    private $id_permissao;
    private $senha;
    private $user;

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }



    public function getId_permissao()
    {
        return $this->id_permissao;
    }

    public function setId_permissao($id_permissao)
    {
        $this->id_permissao = $id_permissao;
    }



    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }




    public function __toString()
    {
        return parent::__toString() . " | Senha: " . $this->senha  . " | Usuario: " . $this->user . " | Id Permissao: " . $this->id_permissao;
    }

    public function buildFromObj($obj)
    {
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr)
    {
        $this->setCodigo($arr['codigo']);
        $this->setSenha($arr['senha']);
        $this->setUser($arr['user']);
    }
}
