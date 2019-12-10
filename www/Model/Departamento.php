<?php

namespace FITCHEF\Model;

class Departamento{

    private $id;
    private $servico;
  
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
}
    ?>