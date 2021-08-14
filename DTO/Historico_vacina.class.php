<?php
class Historico_vacina extends AbsClassCodigo
{
    private $data;
    private $id_paciente;
    private $id_enfermeiro;
    private $id_vacina;





    public function getData()
    {

        return $this->data;
    }


    public function setData($data)
    {

        $this->data =  $data;
    }



    public function getId_paciente()
    {

        return $this->id_paciente;
    }


    public function setId_paciente($id_paciente)
    {

        $this->id_paciente =  $id_paciente;
    }

    public function getId_enfermeiro()
    {

        return $this->id_enfermeiro;
    }


    public function setId_enfermeiro($id_enfermeiro)
    {

        $this->id_enfermeiro =  $id_enfermeiro;
    }



    public function getId_vacina()
    {

        return $this->id_vacina;
    }


    public function setId_vacina($id_vacina)
    {

        $this->id_vacina =  $id_vacina;
    }



    public function __toString()
    {
        return parent::__toString() . " | Data: " . $this->data . " | id_paciente: " . $this->id_paciente . " | id_enfermeiro: " . $this->id_enfermeiro . " | id_vacina: " . $this->id_vacina;
    }

    public function buildFromObj($obj)
    {
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr)
    {
        $this->setCodigo($arr['codigo']);
        $this->setData($arr['data']);
        $this->setId_paciente($arr['id_paciente']);
        $this->setId_enfermeiro($arr['id_enfermeiro']);
        $this->setId_vacina($arr['id_vacina']);
    }
}
