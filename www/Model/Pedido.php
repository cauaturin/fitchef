<?php
namespace FITCHEF\Model;
use FITCHEF\Model\Cliente;

class Pedido{
    private $id;
    private $data;
    private $frete;
    private $dias;
    private $cliente;

    function __construct(){
    }

    // GET SET
    public function getId(){
        return $this->id;
    }
}