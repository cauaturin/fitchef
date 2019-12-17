<?php

namespace FITCHEF\DAO;

use PHPUnit\Framework\TestCase;
use FITCHEF\Model\Departamento;
use FITCHEF\DAO\DAODepartamento;

class DAODepartamentoTests extends TestCase
{



    public function testCadastro()
    {
        $c = new Departamento();
        $DAO = new DAODepartamento();
        
        $c->setNome('Porção');
        $msg = $DAO->cadastrar($c);
        $this->assertEquals($msg, "Cadastrado com sucesso");
 
        
        $c->setNome('Proteína');
        $msg = $DAO->cadastrar($c);
        $this->assertEquals($msg, "Cadastrado com sucesso");

        
        $c->setNome('Sobremesa');
        $msg = $DAO->cadastrar($c);
        $this->assertEquals($msg, "Cadastrado com sucesso");

    }
    


}
?>