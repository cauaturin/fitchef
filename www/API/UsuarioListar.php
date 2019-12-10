<?php 
namespace FITCHEF\API;

use FITCHEF\DAO\DAOUsuario;

class UsuarioListar{
    public $lista;

function __construct(){

    $obj = new DAOUsuario();
    $this->lista = $obj->listaUsuarios();
}
}

    ?>