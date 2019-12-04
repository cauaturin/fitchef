<?php
use PHPUnit\Framework\TestCase;
use FITCHEF\Model\Cliente;

class ClienteTest extends TestCase
{
    public function testClass()
    {
        $c = new Cliente();
        $c->setNome('Daniel');
        $c->setTelefone('(21)1231-2132');
        $c->setEmail('daniel@email.com');
        $c->setCpf('123.456.789-10');
       
        $this->assertEquals($c->getNome(), 'Daniel');
        $this->assertEquals($c->getTelefone(), '(21)1231-2132');
        $this->assertEquals($c->getEmail(), 'daniel@email.com');
        $this->assertEquals($c->getCpf(), '123.456.789-10');
    }

    public function testErrorEmail(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('E-mail Inválido');

        $c = new Cliente();
        $c->setEmail('danielemail.com');

    }

    public function testErrorNome(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Nome Inválido');

        $c = new Cliente();
        $c->setNome("");

    }

    public function testErrorCpf(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('CPF Inválido');

        $c = new Cliente();
        $c->setCpf("");

    }

    public function testErrorTelefone(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Telefone Inválido');

        $c = new Cliente();
        $c->setTelefone("");

    }

    public function testErrorEndereco(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Endereço Inválido');

        $c = new Cliente();
        $c->setEndereco("");

    }

    public function testErrorCep(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Cep Inválido');

        $c = new Cliente();
        $c->setCep("");

    }
    public function testErrorId(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Id Inválido');

        $c = new Cliente();
        $c->setId("");

    }
}