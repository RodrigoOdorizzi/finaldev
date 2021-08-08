<?php

require_once "autoload.php";

abstract class AbsClassCodigoDescricao extends AbsClassCodigo
{

	private $user;
	private $senha;
	private $id_permissao;

	public function getUser()
	{
		return $this->user;
	}

	public function setUser($user)
	{
		$this->user = $user;
	}



	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}



	public function getId_permissao()
	{
		return $this->id_permissao;
	}

	public function setId_permissao($id_permissao)
	{
		$this->id_permissao = $id_permissao;
	}


	public function __toString()
	{
		return parent::__toString() . " | User: " . $this->user . " | Senha: " . $this->senha . " | Id pemissao: " . $this->id_permissao;
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
	}
}
