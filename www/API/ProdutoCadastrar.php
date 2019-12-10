<?php 
namespace FITCHEF\API;
use FITCHEF\Model\Produto;
use FITCHEF\Model\Departamento;
use FITCHEF\DAO\DAOProduto;
use FITCHEF\includes\Util;

class ProdutoCadastrar{

    public $msg;

    function __construct(){

if($_POST){

    
        
        try{
            //CRIAMOS UM OBJETO PRODUTO
            $produto = new Produto();
            $produto->setNome($_POST['nome']);
            $produto->setPreco($_POST['preco']);
            $produto->setDescricao($_POST['descricao']);
            $produto->setImagem(Util::uploadImg());
    
        
            
            //criamos um objeto departamento
            $departamento =new Departamento();
            $departamento->setId($_POST['departamento']);
            
           
            //definindo o departamento para o produto
            $produto->setDepartamento($departamento);


           $DAO = new DAOProduto();
           $this->msg = $DAO->cadastrar($produto);
           

        }catch(\Exception $e){
            $this->msg = $e->getMessage();
            
        
        }
    }
}
}
    

    ?>