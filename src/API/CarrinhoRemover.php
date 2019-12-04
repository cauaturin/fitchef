<?php 
namespace FITCHEF\API;
use FITCHEF\DAO\DAOProduto;
use FITCHEF\Model\Carrinho;
use FITCHEF\Model\Item;
use FITCHEF\Model\Produto;


class CarrinhoRemover{
    function __construct(){
       

        $carrinho = new Carrinho; //inicia o carrinho
        $id = $_GET['id']; //pega o id do carrinho a remover 

        if(isset($_SESSION['carrinho'])){//verifica se existe carrinho na sessão
            $carrinho = $_SESSION['carrinho'];
            

        foreach($carrinho->getLista() as $item){
             //verifica os itens do carrinho
            if($item->getProduto()->getId()===$id){ //se o produto existir no carrinho
                
                $carrinho->removeItem($id); // escluir o carrinho
                $_SESSION['carrinho']= $carrinho; //atualiza o carrinho na sessão
            };
        }
    }else{
        //se não existir o carrinho criado, retorna a página inicial
        header("location: http://localhost/lojavirtual/home");

        }
    }
}
