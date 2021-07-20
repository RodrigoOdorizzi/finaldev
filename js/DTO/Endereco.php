<?php
class Cidade
{
    private $codigo;
    private $Id_cidade;
    private $rua;
    private $bairro;
    private $numerocasa;



    public function getCodigo()
    {

        return $this->codigo;
    }


    public function setCodigo($codigo)
    {

        $this->codigo =  $codigo;
    }




    public function getId_cidade()
    {

        return $this->Id_cidade;
    }


    public function setId_cidade($Id_cidade)
    {

        $this->Id_cidade =  $Id_cidade;
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
}
