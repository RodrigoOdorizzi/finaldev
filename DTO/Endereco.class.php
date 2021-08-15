<?php


class Endereco extends AbsClassCodigo
{
    private $id_cidade;
    private $rua;
    private $bairro;
    private $numerocasa;



    public function getId_cidade()
    {

        return $this->id_cidade;
    }


    public function setId_cidade($id_cidade)
    {

        $this->id_cidade =  $id_cidade;
    }



    public function getRua()
    {

        return $this->rua;
    }


    public function setRua($rua)
    {

        $this->rua =  $rua;
    }



    public function getBairro()
    {

        return $this->bairro;
    }


    public function setBairro($bairro)
    {

        $this->bairro =  $bairro;
    }


    public function getNumerocasa()
    {

        return $this->numerocasa;
    }


    public function setNumerocasa($numerocasa)
    {

        $this->numerocasa =  $numerocasa;
    }


    public function __toString()
    {
        return parent::__toString() . " | ID cidade: " . $this->id_cidade . " | Rua: " . $this->rua  . " | Bairro: " . $this->bairro  . " | Nº casa: " . $this->numerocasa;
    }

    public function buildFromObj($obj)
    {
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr)
    {
        $this->setCodigo($arr['codigo']);
        $this->setId_cidade($arr['id_cidade']);
        $this->setRua($arr['rua']);
        $this->setBairro($arr['bairro']);
        $this->setNumerocasa($arr['numerocasa']);
    }
}
