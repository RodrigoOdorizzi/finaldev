<?php
class Pessoa extends AbsClassCodigoNome
{

    private $sobrenome;
    private $nascimento;
    private $id_endereco;



    public function getSobrenome()
    {

        return $this->sobrenome;
    }


    public function setSobrenome($sobrenome)
    {

        $this->sobrenome =  $sobrenome;
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

        return $this->id_endereco;
    }


    public function setId_endereco($id_endereco)
    {

        $this->id_endereco =  $id_endereco;
    }



    public function __toString()
    {
        return parent::__toString() . " | Sobrenome: " . $this->sobrenome . " | nascimento: " . $this->nascimento . " | id_endereco: " . $this->id_endereco;
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
        $this->setSobrenome($arr['sobrenome']);
        $this->setNascimento($arr['nascimento']);
        $this->setId_endereco($arr['id_endereco']);
    }
}
