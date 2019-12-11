<?php

namespace FITCHEF\DAO;

use FITCHEF\Model\Conexao;
use FITCHEF\Model\Departamento;

    class DAODepartamento{

    public $lastId;

        

        public function cadastrar(Departamento $departamento){
           
            $pdo = Conexao::getInstance(); // Cria objeto de conexão
            $pdo->beginTransaction();// Inicia a transação
           
            try{

           $con = $pdo->prepare(
               "INSERT INTO departamento
                VALUES (default, :nome)");

            $con->bindValue(":nome", $departamento->getNome());
            $con->execute();


            $this->lastId = $pdo->lastInsertId();
            $pdo->commit(); // Finaliza a transação
            return "Cadastrado com sucesso";

        }catch(Exception $e){
            $this->lastId= 0;
            $pdo->rollback();
            return "Erro ao cadastrar";
        }
    }
    
    public function deleteFromId($id){
        $sql = "delete from departamento";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "todos excluídos com sucesso";
    }

        public function buscaPorId($id){
            $sql = "SELECT * FROM departamento WHERE pk_departamento = :id";
            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":id",$id);
            $con->execute();

            $departamento = new departamento();
            $departamento = $con->fetch(\PDO::FETCH_ASSOC);
            
            return  $departamento;


        }

        public function deleteAll(){
            $sql = "DELETE from departamento";
            $con = Conexao::getInstance()->prepare($sql);
            $con->execute();
            return "todos excluídos com sucesso";
        }

        public function listaDepartamento(){

            $sql = "SELECT * FROM departamento";
            $con = conexao::getInstance()->prepare($sql);
            $con->execute();

            $lista = array();

            while($departamento = $con->fetch(\PDO::FETCH_ASSOC)) {
                $lista[] = $departamento;
            }

            return $lista;
        }
    }

?>