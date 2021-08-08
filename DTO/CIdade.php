<?php
class Cidade
{
    private $codigo;
    private $Id_state;
    private $nome;
    private $Populacao;



    public function getCodigo()
    {

        return $this->codigo;
    }


    public function setCodigo($codigo)
    {

        $this->codigo =  $codigo;
    }




    public function getId_state()
    {

        return $this->Id_state;
    }


    public function setId_state($Id_state)
    {

        $this->Id_state =  $Id_state;
    }







    public function getNome()
    {

        return $this->nome;
    }


    public function setNome($nome)
    {

        $this->nome =  $nome;
    }



    public function getPopulacao()
    {

        return $this->Populacao;
    }


    public function setUf($Populacao)
    {

        $this->Populacao =  $Populacao;
    }
}
