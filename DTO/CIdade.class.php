<?php

require_once "autoload.php";

class Cidade extends AbsClassCodigoNome
{

    private $id_state;
    private $populacao;



    public function getId_state()
    {

        return $this->id_state;
    }


    public function setId_state($id_state)
    {

        $this->id_state =  $id_state;
    }




    public function getPopulacao()
    {

        return $this->populacao;
    }


    public function setPopulacao($populacao)
    {

        $this->populacao =  $populacao;
    }


    public function __toString()
    {
        return parent::__toString() . " | ID Estado: " . $this->id_state . " | Populacao: " . $this->populacao;
    }

    public function buildFromObj($obj)
    {
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr)
    {
        $this->setCodigo($arr['codigo']);
        $this->setNome($arr['nome']);
        $this->setId_state($arr['id_state']);
        $this->setPopulacao($arr['populacao']);
    }
}
