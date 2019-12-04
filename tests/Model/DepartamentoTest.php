<?php
use PHPUnit\Framework\TestCase;
use FITCHEF\Model\Departamento;

class DepartamentoTest extends TestCase
{
    public function testClass()
    {
        $c = new Departamento();
        $c->setNome('Proteína');
        
       
        $this->assertEquals($c->getNome(), 'Proteína');
        
    }


    public function testErrorNome(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Nome Inválido');

        $c = new Departamento();
        $c->setNome("");

    }

   
    public function testErrorId(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Id Inválido');

        $c = new Departamento();
        $c->setId("");

    }
}