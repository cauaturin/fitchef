<?php

namespace FITCHEF\DAO;

use PHPUnit\Framework\TestCase;
use FITCHEF\Model\CLiente;
use FITCHEF\DAO\DAOCliente;

class DAOClienteTests extends TestCase
{

    /**
     * @before
     */

     public function setUpDeleteAll(){
         $DAO = new DAOCliente();
         $DAO->deleteALL();
     }
    public function testCadastro()
    {
            $c = new Cliente();
            //$c->setId();
            $c->setNome('Victor');
            $c->setEmail('daniel@gmail.com');
            $c->setTelefone('(21)1231-2132');
            $c->setCpf('145-146-146-12');
            $c->setEndereco('Senac');
            $c->setCep('Senac');

            
            $DAO = new DAOCliente();
            $msg = $DAO->cadastrar($c);
            $this->assertEquals($msg, "Cadastrado com sucesso");
    }}
?>