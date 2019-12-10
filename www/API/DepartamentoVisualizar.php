<?php
namespace FITCHEF\API; //local desta classe
use FITCHEF\DAO\DAODepartamento;

class DepartamentoVisualizar{
    public $dados;
    
    public function __construct(){
        try{
            $DAO = new DAODepartamento();
            $this->dados = $DAO->buscaPorId($_GET['id']);

        }catch(\exception $e){
            $this->dados = $e->getMessage();
        }

    }
}
?>