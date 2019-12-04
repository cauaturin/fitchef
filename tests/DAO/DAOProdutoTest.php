<?php

namespace FITCHEF\DAO;

use PHPUnit\Framework\TestCase;
use FITCHEF\Model\Produto;
use FITCHEF\DAO\DAOProduto;

class DAOProdutoTests extends TestCase
{

    /**
     * @before
     */

     public function setUpDeleteAll(){
         $DAO = new DAOProduto();
         $DAO->deleteALL();
     }
    public function testProduto()
    {
            $c = new Produto();
            //$c->setId();
            $c->setNome('brownie');
            $c->setPreco(2225);
            $c->setDescricao('produto');
            $c->setImagem('bolo.jpg');
            

            
            $DAO = new DAOProduto();
            $msg = $DAO->cadastrar($c);
            $this->assertEquals($msg, "Cadastrado com sucesso");
    }}
?>