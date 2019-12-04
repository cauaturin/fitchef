<?php 
namespace FITCHEF\API;

use FITCHEF\DAO\DAOProduto;

class ProdutoListarPorcoes{
    public $lista;
  
function __construct(){
    $obj = new DAOProduto();
    $this->lista = $obj->listaProdutoPorDepartamento(3);
    
    }
}


    ?>