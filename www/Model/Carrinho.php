<?php
namespace FITCHEF\Model;
use FITCHEF\Model\Item;
use FITCHEF\DAO\DAOProduto;
use FITCHEF\Model\Produto;

class Carrinho{
	
    private $id;
    private $lista;

    public function __construct(){
		$this->lista = [];
		
	}
	
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function addItem($id){

 			$dao = new DAOProduto();
            $obj = new Produto();
			$obj = $dao->buscaPorId($id);
			 $item = new Item();
            if($obj->getId()){
               
                $item->setProduto($obj);
                $item->setQuantidade(1);
            };
		array_push($this->lista, $item);
	}

	public function removeItem($id){

		foreach($this->lista as $item){
			if($item->getProduto()->getId()===$id){
				$index = array_search($item, $this->lista, true);
				unset($this->lista[$index]);
			};
		}
	}

	public function getItems(){
		return $this->lista;
	}

	public function getLista(){
		return $this->lista;
	}

	public function setLista($lista){
		$this->lista = $lista;
	}
}

?>