<?php 

use PHPUnit\Framework\TestCase;
use FITCHEF\Model\Pedido;
use FITCHEF\Model\Produto;
use FITCHEF\Model\Departamento;
use FITCHEF\Model\Cliente;
use FITCHEF\Model\Carrinho;
use FITCHEF\Model\Item;
use FITCHEF\DAO\DAOPedido;
use FITCHEF\DAO\DAOProduto;
use FITCHEF\DAO\DAODepartamento;
use FITCHEF\DAO\DAOCliente;


    class PedidoCadastrarTests extends TestCase
{
    public $departamento; // dados do departamento
    public $cliente; // dados do cliente
    public $carrinho; // dados do carrinho
    public $produto; // dados do produto
    /**
   * @before
   */

   public function setUpInit(){ // Será executado primeiro 
    // Cria um novo departamento 
    $this->departamento = new Departamento();
    $this->departamento->setNome('Ingredientes');

    // Cadastra um novo departamento para teste e atribui ao $departamento
    $DAO = new DAODepartamento();
    $DAO->cadastrar($this->departamento);
    $this->departamento->setId($DAO->lastId);

    // Cria um novo produto
    $this->produto = new Produto();
    $this->produto->setNome('Televisão');
    $this->produto->setPreco('2000');
    $this->produto->setDescricao('Samsung 4k');
    $this->produto->setImagem('imagem.jpg');
    $this->produto->setDepartamento($this->departamento);
    $DAO2 = new DAOProduto();
    $result = $DAO2->cadastrar($this->produto);
    $this->produto->setId($DAO2->lastId);

    // Cria um novo cliente
    $this->cliente = new Cliente();
    $this->cliente->setNome('Daniel 55');
    $this->cliente->setTelefone('(21)1231-2132');
    $this->cliente->setEmail('daniel@email.com');
    $this->cliente->setCpf('123.456.678-10');
    $this->cliente->setEndereco('Estrada Random, 718');
    $this->cliente->setCep('23071-718');
    $this->cliente->setSenha('123321');
    $DAO3 = new DAOCliente();
    $result = $DAO3->cadastrar($this->cliente); // <---
    $this->cliente->setId($DAO3->lastId);

    $this->carrinho = new Carrinho();
    $this->carrinho->addItem($this->produto->getId());

   }

   public function testCadastro() // testa o cadastro de produtos
   {
        
       $_SESSION['clienteid'] = $this->cliente->getId();
       $_SESSION['clientenome'] = $this->cliente->getId();
             
       $_SESSION ['carrinho'] = $this->carrinho;
       $obj = new \FITCHEF\API\PedidoCadastrar;

       $this->assertEquals($obj->msg, "Pedido efetuado com sucesso");
   
    }
}

?>