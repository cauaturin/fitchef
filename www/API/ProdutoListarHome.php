<?php 
namespace FITCHEF\API;

use FITCHEF\DAO\DAOProduto;

class ProdutoListarHome{
    public $lista;
    public $lista2;
    public $lista3;

function __construct(){
    $obj = new DAOProduto();
    $this->lista = $obj->listaProdutoPorDepartamento(1);
    $this->lista2 = $obj->listaProdutoPorDepartamento(2);
    $this->lista3 = $obj->listaProdutoPorDepartamento(3);
    }
}


    ?>