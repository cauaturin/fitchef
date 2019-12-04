<?php
use PHPUnit\Framework\TestCase;  // importar o PHPUnit
use FITCHEF\Model\Usuario;  // "FITCHEF" foi configurada no JSON composer

class UsuarioTest extends TestCase
{
    public function testClass()
    {
        $c = new Usuario();
        $c->setNome('antco');
        $c->setSenha('987654');
      
       
        $this->assertEquals($c->getNome(), 'antco');
        $this->assertEquals($c->getSenha(), '987654');
        }


    public function testErrorNome(){

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Nome inválido');
        $c = new Usuario();
        $c->setNome("");
    }

    public function testErrorSenha(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Senha inválida');
        $c = new Usuario();
        $c->setSenha("");
    }

}

?>
  