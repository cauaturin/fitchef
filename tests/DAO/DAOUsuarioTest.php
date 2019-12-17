<?php 
    use PHPUnit\Framework\TestCase;
    use FITCHEF\Model\Usuario;
    use FITCHEF\DAO\DAOUsuario;
    class DAOUsuarioTests extends TestCase
{

  

    public function testCadastro()
    {
        $c = new Usuario();
    //$c->setId();
    $c->setNome('antco');
    $c->setSenha('987654');
       
    $DAO = new DAOUsuario();
    $msg = $DAO->cadastrar($c);
    $this->assertEquals($msg, "Cadastrado com sucesso");
    }
}

?>