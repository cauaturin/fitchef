<?php

namespace FITCHEF\DAO;

use FITCHEF\Model\Conexao;
use FITCHEF\Model\Cliente;


    class DAOCliente{

    public function cadastrar(Cliente $cliente){
            $sql = "INSERT INTO cliente
                VALUES (default, :nome, :telefone, :email, :cpf, :endereco, :cep)";

            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $cliente->getNome());
            $con->bindValue(":telefone", $cliente->getTelefone());
            $con->bindValue(":email", $cliente->getEmail());
            $con->bindValue(":cpf", $cliente->getCPF());
            $con->bindValue(":endereco", $cliente->getEndereco());
            $con->bindValue(":cep", $cliente->getCEP());
        
  

            $con->execute();
            
            return "Cadastrado com sucesso";
        }
        
        public function deleteAll(){
            $sql = "DELETE from cliente";
            $con = Conexao::getInstance()->prepare($sql);
            $con->execute();
            return "todos excluídos com sucesso";
        }


        public function listaClientes(){

            $sql = "SELECT * FROM cliente";
            $con = conexao::getInstance()->prepare($sql);
            $con->execute();

            $lista = array();

            while($cliente = $con->fetch(\PDO::FETCH_ASSOC)) {
                $lista[] = $cliente;
            }

            return $lista;
        }

        public function buscaPorId($id){
            $sql = "SELECT * FROM cliente WHERE pk_cliente = :id";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":id",$id);
            $con->execute();

            $cliente = new Cliente();
            $cliente = $con->fetch(\PDO::FETCH_ASSOC);
            
            return  $cliente;


        }

    }
?>