<?php
class Estado
{
    private $codigo;
    private $data;
    private $Id_paciente;
    private $Id_enfermeiro;
    private $Id_vacina;



    public function getCodigo()
    {

        return $this->codigo;
    }


    public function setCodigo($codigo)
    {

        $this->codigo =  $codigo;
    }




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

        return $this->Id_paciente;
    }


    public function setId_paciente($Id_paciente)
    {

        $this->Id_paciente =  $Id_paciente;
    }

    public function getId_enfermeiro()
    {

        return $this->Id_enfermeiro;
    }


    public function setId_enfermeiro($Id_enfermeiro)
    {

        $this->Id_enfermeiro =  $Id_enfermeiro;
    }



    public function getId_vacina()
    {

        return $this->Id_vacina;
    }


    public function setId_vacina($Id_vacina)
    {

        $this->Id_vacina =  $Id_vacina;
    }
}
