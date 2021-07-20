<?php
class paciente
{
    private $codigo;
    private $Id_usuario;
    private $Id_pessoa;



    public function getCodigo()
    {

        return $this->codigo;
    }


    public function setCodigo($codigo)
    {

        $this->codigo =  $codigo;
    }




    public function getId_usuario()
    {

        return $this->Id_usuario;
    }


    public function setId_usuario($Id_usuario)
    {

        $this->Id_usuario =  $Id_usuario;
    }





    public function getId_pessoa()
    {

        return $this->Id_pessoa;
    }


    public function setId_pessoa($Id_pessoa)
    {

        $this->Id_pessoa =  $Id_pessoa;
    }
}
