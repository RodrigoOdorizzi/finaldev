<?php

require_once "autoload.php";

abstract class AbsClassCodigoDescricaoNome extends AbsClassCodigoDescricao
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
		return parent::__toString() . " | User: " . $this->user . " | Senha: " . $this->senha . " | Id pemissao: " . $this->id_permissao . " | Nome: " . $this->nome;
	}

	public function buildFromObj($obj)
	{
		$obj = (array)$obj;
		$this->buildFromArray($obj);
	}

	public function buildFromArray($arr)
	{
		$this->setCodigo($arr['codigo']);
		$this->setUser($arr['user']);
		$this->setSenha($arr['senha']);
		$this->setId_permissao($arr['id_permissao']);
		$this->setNome($arr['nome']);
	}
}
