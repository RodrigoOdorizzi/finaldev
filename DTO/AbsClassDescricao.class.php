<?php

require_once "autoload.php";

abstract class AbsClassDescricao extends AbsClassCodigo
{
	private $descricao;



	public function getDescricao()
	{

		return $this->descricao;
	}


	public function setDescricao($descricao)
	{

		$this->descricao =  $descricao;
	}


	public function __toString()
	{
		return parent::__toString() . " | descricao: " . $this->descricao;
	}

	public function buildFromObj($obj)
	{
		$obj = (array)$obj;
		$this->buildFromArray($obj);
	}

	public function buildFromArray($arr)
	{
		$this->setCodigo($arr['codigo']);
		$this->setDescricao($arr['descricao']);
	}
}
