<?php 
  namespace FITCHEF\API;
  use FITCHEF\Model\Cliente;
  use FITCHEF\DAO\DAOCliente;
  
  class ClienteCadastrar{
  
      public $msg;
  
      function __construct(){
    
    if($_POST){
        
        try{
            $obj = new Cliente();
            $obj->setNome($_POST['nome']);
            $obj->setTelefone($_POST['telefone']);
            $obj->setEmail($_POST['email']);
            $obj->setCPF($_POST['cpf']);
            $obj->setEndereco($_POST['endereco']);
            $obj->setCep($_POST['cep']);
        
            $DAO = new DAOCliente();
            $this->msg = $DAO->cadastrar($obj);

        }catch(\Exception $e){
            $this->msg = $e->getMessage();
        
        }
    }
}
  }


    ?>