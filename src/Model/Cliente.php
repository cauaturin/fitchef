<?php

namespace FITCHEF\Model;

class Cliente{

    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $cpf;
    private $endereco;
    private $cep;
    
    

    
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

    public function getTelefone(){
        return $this->telefone;
    }
    
    public function setTelefone($telefone){
        if($telefone==="") throw new \Exception('Telefone Inválido');
        $this->telefone = $telefone;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        }else{
            throw new \Exception("E-mail Inválido");    
    }
}
    public function getCpf(){
        return $this->cpf;
    }
    
    public function setCpf($cpf){
        if ($cpf ===""){
            throw new \Exception("CPF Inválido");
        }
        $this->cpf = $cpf;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    
    public function setEndereco($endereco){
        if($endereco==="") throw new \Exception('Endereço Inválido');
        $this->endereco = $endereco;
    }

    public function getCep(){
        return $this->cep;
    }
    
    public function setCep($cep){
        if($cep==="") throw new \Exception('Cep Inválido');
        $this->cep = $cep;
        
    }



    }
    
    ?>
