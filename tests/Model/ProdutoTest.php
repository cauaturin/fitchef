<?php
use PHPUnit\Framework\TestCase;
use FITCHEF\Model\Produto;

class ProdutoTest extends TestCase
{
    // DADOS COM CADASTRO CORRETO
    public function testClass()
    {
        $c = new Produto();
        //ARMAZENA OS DADOS NA CLASSE
        $c->setNome('Daniel');
        $c->setPreco('(21)1231-2132');
        $c->setDescricao('Bolo de Chocolate');
        $c->setImagem('bolo.jpg');

        // VEJO SE GET RETORNA OS MESMOS VALORES       
        $this->assertEquals($c->getNome(), 'Daniel');
        $this->assertEquals($c->getPreco(), '(21)1231-2132');
        $this->assertEquals($c->getDescricao(), 'Bolo de Chocolate');
        $this->assertEquals($c->getImagem(), 'bolo.jpg');
    }

    // erro se deixar o nome em branco
    public function testErrorNomeProduto(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Nome Inválido');

        $c = new Produto();
        $c->setNome('');
    }


    public function testErrorPrecoProduto(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Preco Inválido');

        $c = new Produto();
        $c->setPreco('');
    }

    public function testErrorDescricaoProduto(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('descricao Inválido');

        $c = new Produto();
        $c->setDescricao('');
    }

       
    public function testErrorImagemProduto(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('imagem Inválida');

        $c = new Produto();
        $c->setImagem('');
    }


}