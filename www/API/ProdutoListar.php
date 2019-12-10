<?php 
namespace FITCHEF\API;

use FITCHEF\DAO\DAOProduto;

class ProdutoListar{
    public $lista;

function __construct(){
    $obj = new DAOProduto();
    $this->lista = $obj->listaProduto();
    }
}


    ?>