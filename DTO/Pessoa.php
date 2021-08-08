<?php
class pessoa
{
    private $codigo;
    private $nome;

    private $sobrenome;
    private $nascimento;
    private $Id_endereco;


    public function getCodigo()
    {

        return $this->codigo;
    }


    public function setCodigo($codigo)
    {

        $this->codigo =  $codigo;
    }




    public function getNome()
    {

        return $this->nome;
    }


    public function setNome($nome)
    {

        $this->nome =  $nome;
    }









    public function getSobrenome()
    {

        return $this->sobrenome;
    }


    public function setSobrenome($sobrenome)
    {

        $this->nome =  $sobrenome;
    }














    public function getNascimento()
    {

        return $this->nascimento;
    }


    public function setNascimento($nascimento)
    {

        $this->nascimento =  $nascimento;
    }















    public function getId_endereco()
    {

        return $this->Id_endereco;
    }


    public function setId_enderecoe($Id_endereco)
    {

        $this->Id_endereco =  $Id_endereco;
    }
}
