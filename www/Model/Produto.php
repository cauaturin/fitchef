<?php

namespace FITCHEF\Model;

class Produto{

    private $id;
    private $nome;
    private $preco;
	private $descricao;
	private $imagem;

    private $departamento; //objeto ($id e $nome)
  
    public function __construct(){
    }
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		if($id==="") throw new \Exception('Id Inválido');
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		if($nome==="") throw new \Exception('Nome Inválido');
		$this->nome = $nome;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function setPreco($preco){
		if($preco==="") throw new \Exception('Preco Inválido');
		$this->preco = $preco;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		if($endereco==="") throw new \Exception('Endereço Inválido');
		$this->descricao = $descricao;
	}

	public function getImagem(){
		return $this->imagem;
	}

	public function setImagem($imagem){
		if($imagem==="") throw new \Exception('imagem Inválida');
		$this->imagem = $imagem;
	}

	public function getDepartamento(){
		return $this->departamento;
	}

	public function setDepartamento($departamento){
		if($departamento==="") throw new \Exception('Departamento Inválido');
		$this->departamento = $departamento;
	}
}
    ?>