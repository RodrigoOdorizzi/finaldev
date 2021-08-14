<?php
class Estado extends AbsClassCodigoNome
{
    private $uf;



    public function getUf()
    {

        return $this->uf;
    }


    public function setUf($uf)
    {

        $this->uf =  $uf;
    }




    public function __toString()
    {
        return parent::__toString() . " | uf: " . $this->uf;
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
        $this->setUf($arr['uf']);
    }
}
