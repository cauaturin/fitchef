<?php

namespace FITCHEF\DAO;

use FITCHEF\Model\Conexao;
use FITCHEF\Model\Pedido;
use FITCHEF\Model\Item;
use FITCHEF\Model\Carrinho;


    class DAOPedido{

    public function cadastrar(Pedido $pedido, Carrinho $carrinho){

            $pdo = Conexao::getInstance(); // Cria objeto de conexão
            $pdo->beginTransaction();// Inicia a transação

            try{

                $con = $pdo->prepare(
                    "INSERT INTO pedido VALUES 
                        (default, :data_pedido, :frete, :dias, :fk_cliente)"
                );
            
            $con->bindValue(":data_pedido", $pedido->getData());
            $con->bindValue(":frete", $pedido->getFrete());
            $con->bindValue(":dias", $pedido->getDias());
            $con->bindValue(":fk_cliente", $pedido->getCliente()->getId());
            $con->execute();
            $lastId = $pdo->lastInsertId(); 

            $con2 = $pdo->prepare(
                "INSERT INTO item
                        VALUES ( :fk_pedido,:fk_produto, :quantidade)");
                        
            foreach ($carrinho->getItems() as $item){
              
                $con2->bindValue(":fk_produto", $item->getProduto()->getId());
                $con2->bindValue("fk_pedido", $lastId);
                $con2->bindValue("quantidade", $item->getQuantidade());
                $con2->execute();

            }    
            
            $pdo->commit();
            $_SESSION['carrinho'] = null;
            return "Pedido efetuado com sucesso";
       }catch(Exception $e){
        $pdo->rollback();
        return "Erro ao efetuar o pedido";
    }

      }
    }