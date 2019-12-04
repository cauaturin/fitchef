<?php
namespace FITCHEF\API; //local desta classe
use FITCHEF\DAO\DAOCliente;

class ClienteVisualizar{
    public $dados;
    
    public function __construct(){
        try{
            $DAO = new DAOCliente();
            $this->dados = $DAO->buscaPorId($_GET['id']);

        }catch(\exception $e){
            $this->dados = $e->getMessage();
        }

    }
}
?>