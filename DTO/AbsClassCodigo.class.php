<?php

abstract class AbsClassCodigo{
	
	private $codigo;

	public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	function __toString(){
		return "Codigo: ".$this->codigo;
	}

	public function buildFromObj($obj){
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr){
        $this->setCodigo($arr['codigo']);
    }
	
}
