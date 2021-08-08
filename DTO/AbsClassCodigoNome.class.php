<?php

require_once "autoload.php";

abstract class AbsClassCodigoNome extends AbsClassCodigo
{

	private $nome;

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}




	public function __toString()
	{
		return parent::__toString() . " | Nome: " . $this->nome;
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
	}
}
