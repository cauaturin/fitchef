<?php 
namespace FITCHEF\API;

use FITCHEF\DAO\DAOUsuario;
use FITCHEF\model\Usuario;

class UsuarioLogar{

    public $msg;

    function __construct(){

if($_POST){

    
        
        try{
            //CRIAMOS UM OBJETO usuario
            $obj = new Usuario();
            $obj->setNome($_POST['nome']);
            $obj->setSenha($_POST['senha']);

            

           $DAO = new DAOusuario();
           $result = $DAO->buscaPorNomeSenha($obj);

           if($result){
            $_SESSION['usuarioid'] = $result['id'];
            $_SESSION['usuarionome'] = $result['nome'];

                header("location: http://localhost/fitchef/painel/adm");
           }else{
               $this->msg = "Usuário/Senha Inválidos";
           }
           

        }catch(\Exception $e){
            $this->msg = $e->getMessage();
            
        
        }
    }
}
}
    

    ?>