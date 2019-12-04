<?php 
namespace FITCHEF\API;

use FITCHEF\DAO\DAOCliente;

class ClienteListar{
    public $lista;

function __construct(){

    $obj = new DAOCliente();
    $this->lista = $obj->listaClientes();
}
}

    ?>
 