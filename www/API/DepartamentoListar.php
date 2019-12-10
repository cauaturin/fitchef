<?php 
namespace FITCHEF\API;

use FITCHEF\DAO\DAODepartamento;

class DepartamentoListar{
    public $lista;

function __construct(){
    $obj = new DAODepartamento();
    $this->lista = $obj->listaDepartamento();
    }
}


    ?>
 