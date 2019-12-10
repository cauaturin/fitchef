<?php
 namespace FITCHEF\API;
use FITCHEF\DAO\DAOProduto;
use FITCHEF\Model\Carrinho;
use FITCHEF\Model\Item;
use FITCHEF\Model\Produto;

class CarrinhoVisualizar{
    
    function __construct(){
        
        $carrinho;

    $id = $_GET['id'];
    $add = true; // true-> Adicione no carrinho // false-> Já existe no carrinho, não adicionar

    // se existir carrinho criado

    if(isset($_SESSION['carrinho'])){
        $carrinho = $_SESSION['carrinho']; // Pega o carrinho

        // Verifica se o produto já existe no carrinho
        foreach($carrinho->getItems() as $item) {
            if ($item->getProduto()->getId()===$id){ // Verificação feita pelo ID do produto
            $add = false; // Produto encontrado, não adicione
            };
        }
    }else{
        // Carrinho não existe na Session, então crie
        $carrinho = new Carrinho();
    }

    // Produto não consta no carrinho, então adicione
    
    if($add===true){
    	$carrinho->addItem($id); // Adicionando produto
    	$_SESSION['carrinho'] = $carrinho; // Coloca o carrinho na session com o produto adicionado
    
    
    }
    }
}

?>