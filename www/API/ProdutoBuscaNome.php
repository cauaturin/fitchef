<?php
namespace FITCHEF\API;
use FITCHEF\DAO\DAOProduto;
class ProdutoBuscaNome {

    public $lista;
    
    function __construct(){
        
        $busca = $_GET['id'];
        $obj = new DAOProduto();
        $this->lista = $obj->buscaPorNome($busca);
    }
}
?>