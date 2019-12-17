<?php
namespace FITCHEF\API;
use FITCHEF\Model\Cliente;
use FITCHEF\Model\Pedido;
use FITCHEF\Model\Carrinho;
use FITCHEF\DAO\DAOPedido;
class PedidoCadastrar{
    public $msg;
    function __construct(){
           
     try{
        $c = new Cliente();
        $c->setId($_SESSION['clienteid']); // INSERIR UM ID JÁ EXISTENTE
        $c->setNome($_SESSION['clientenome']);
    
         $obj = new Pedido();
         //$c->setId();
         $obj->setData('2019-12-25');
         $obj->setFrete(20.00);
         $obj->setDias(5);
         $obj->setCliente($c);
        
        $DAO = new DAOPedido();
        $this->msg = $DAO->cadastrar($obj,$_SESSION['carrinho']);
        echo $this->msg;
    }catch(Exception $e){
        $this->msg = $e->getMessage();
}
    }
}