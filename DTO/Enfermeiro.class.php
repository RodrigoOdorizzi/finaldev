<?php

require_once "autoload.php";

class Enfermeiro extends AbsClassCodigo

{


    private $id_pessoa;
    private $id_user;


    public function getId_pessoa()
    {
        return $this->id_pessoa;
    }

    public function setId_pessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;
    }



    public function getId_user()
    {
        return $this->id_user;
    }

    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
    }



    public function __toString()
    {
        return parent::__toString() . " | id_pessoa: " . $this->id_pessoa . " | id_user: " . $this->id_user;
    }

    public function buildFromObj($obj)
    {
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr)
    {
        $this->setCodigo($arr['codigo']);
        $this->setId_pessoa($arr['id_pessoa']);
        $this->setId_user($arr['id_user']);
    }
}
