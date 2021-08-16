<?php
class Vacina extends AbsClassCodigoNome
{

    private $id_doenca;
    private $id_fabricante;
    private $lote;



    public function getId_doenca()
    {

        return $this->id_doenca;
    }


    public function setId_doenca($id_doenca)
    {

        $this->id_doenca =  $id_doenca;
    }





    public function getId_fabricante()
    {

        return $this->id_fabricante;
    }


    public function setId_fabricante($id_fabricante)
    {

        $this->id_fabricante =  $id_fabricante;
    }






    public function getLote()
    {

        return $this->lote;
    }


    public function setLote($lote)
    {

        $this->lote =  $lote;
    }



    public function __toString()
    {
        return parent::__toString() . " | Id_doenca: " . $this->id_doenca . " | id_fabricante: " . $this->id_fabricante . " | lote: " . $this->lote;
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
        $this->setId_doenca($arr['id_doenca']);
        $this->setId_fabricante($arr['id_fabricante']);
        $this->setLote($arr['lote']);
    }
}
