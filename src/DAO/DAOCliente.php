<?php

namespace FITCHEF\DAO;

use FITCHEF\Model\Conexao;
use FITCHEF\Model\Cliente;
use FITCHEF\Model\Usuario;


    class DAOCliente{

    public function cadastrar(Cliente $cliente){
            $sql = "INSERT INTO cliente
                VALUES (default, :nome, :telefone, :email, :cpf, :endereco, :cep, :senha)";

            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":nome", $cliente->getNome());
            $con->bindValue(":telefone", $cliente->getTelefone());
            $con->bindValue(":email", $cliente->getEmail());
            $con->bindValue(":cpf", $cliente->getCPF());
            $con->bindValue(":endereco", $cliente->getEndereco());
            $con->bindValue(":cep", $cliente->getCEP());
            $con->bindValue(":senha", $cliente->getSenha());
  

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

        public function buscaPorNomeSenha(Cliente $cliente){
            $sql = "SELECT * FROM cliente WHERE email = :email AND senha = :senha";


            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":email", $cliente->getEmail());
            $con->bindValue(":senha", $cliente->getSenha());
            $con->execute();




                $obj = new Usuario();
                $obj = $con->fetch(\PDO::FETCH_ASSOC);
                return $obj;
           
            
        }

      
    }
?>