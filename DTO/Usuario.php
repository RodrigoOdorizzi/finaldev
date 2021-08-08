<?php
class pessoa
{
    private $codigo;
    private $senha;

    private $user;
    private $Id_permissao;


    public function getCodigo()
    {

        return $this->codigo;
    }


    public function setCodigo($codigo)
    {

        $this->codigo =  $codigo;
    }




    public function getSenha()
    {

        return $this->senha;
    }


    public function setSenha($senha)
    {

        $this->senha =  $senha;
    }








    public function getUser()
    {

        return $this->user;
    }


    public function setUser($user)
    {

        $this->user =  $user;
    }























    public function getId_permissao()
    {

        return $this->Id_permissao;
    }


    public function setId_permissao($Id_permissao)
    {

        $this->Id_permissao =  $Id_permissao;
    }
}
