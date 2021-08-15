<?php

require_once "autoload.php";
class Paciente extends AbsClassCodigo
{


    private $id_usuario;
    private $id_pessoa;




    public function getId_usuario()
    {

        return $this->id_usuario;
    }


    public function setId_usuario($id_usuario)
    {

        $this->id_usuario =  $id_usuario;
    }





    public function getId_pessoa()
    {

        return $this->id_pessoa;
    }


    public function setId_pessoa($id_pessoa)
    {

        $this->id_pessoa =  $id_pessoa;
    }



    public function __toString()
    {
        return parent::__toString() . " | id usuario: " . $this->id_usuario . " | id pessoa: " . $this->id_pessoa;
    }

    public function buildFromObj($obj)
    {
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr)
    {
        $this->setCodigo($arr['codigo']);
        $this->setId_usuario($arr['id_usuario']);
        $this->setId_pessoa($arr['id_pessoa']);
    }
}
