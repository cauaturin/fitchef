<?php 
namespace FITCHEF\API;

use FITCHEF\DAO\DAOCliente;
use FITCHEF\model\Cliente;

class ClienteLogar{

    public $msg;

    function __construct(){

if($_POST){

    
        
        try{
            //CRIAMOS UM OBJETO usuario
            $obj = new Cliente();
            $obj->setEmail($_POST['email']);
            $obj->setSenha($_POST['senha']);

            

           $DAO = new DAOCliente();
           $result = $DAO->buscaPorNomeSenha($obj);

           if($result){
            $_SESSION['clienteid'] = $result['id'];
            $_SESSION['clientenome'] = $result['nome'];

                header("location: http://localhost/fitchef/painel/adm");
           }else{
               $this->msg = "Cliente/Senha Inválidos";
           }
           

        }catch(\Exception $e){
            $this->msg = $e->getMessage();
            
        
        }
    }
}
}
    

    ?>