<?php
class Estado
{
    private $codigo;
    private $nome;
    private $Uf;



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



    public function getUf()
    {

        return $this->Uf;
    }


    public function setUf($Uf)
    {

        $this->Uf =  $Uf;
    }
}
