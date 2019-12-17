<?php

namespace FITCHEF\DAO;

use PHPUnit\Framework\TestCase;
use FITCHEF\Model\CLiente;
use FITCHEF\DAO\DAOCliente;

class DAOClienteTests extends TestCase
{

    public function testCadastro()
    {       
            //dados
            $c = new Cliente();
            //$c->setId();
            $c->setNome('Victor');
            $c->setEmail('daniel@gmail.com');
            $c->setTelefone('(21)1231-2132');
            $c->setCpf('145-146-146-12');
            $c->setEndereco('Senac');
            $c->setCep('Senac');
            $c->setSenha('Senac');

            //execução
            $DAO = new DAOCliente();
            $result = $DAO->cadastrar($c);

            //testa resultados
            $this->assertEquals($result, "Cadastrado com sucesso");

            //remove os dados gerados
            $DAO->deleteFromId($DAO->lastId);
    }}
?>