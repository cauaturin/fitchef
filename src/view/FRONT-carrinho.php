<?php include "FRONT-header.php" ?>

<div class="card titulofaixa">
    <div class="card-body titulo">
        Meu carrinho
    </div>
</div>
</div>
<div class="sectiongray">
    <div class="container">
        <div class="carrintable">

            <?php
        @$carrinho = $_SESSION['carrinho'];

        if($carrinho===null || empty($carrinho->getItems())){
            // Inicio HTML
            ?>
            <?php include "FRONT-carrinhovazio.php" ?>

            <?php
            // Fim HTML
        }else{

            foreach ($carrinho->getItems() as $item){
                $produto = $item->getProduto();
                $link = "http://localhost/fitchef/carrinho/remover/".$produto->getId();
             
                // Inicio HTML
            ?>

            <div>
                <div class="row painelcarrinho">

                    <div class="col-sm-3 tabelacarrinho">
                        <p class="nome-remove"><?php echo $produto->getNome(); ?></p>
                        <p><?php echo $produto->getPreco(); ?></p>

                    </div>

                    <div class="col-sm-3 tabelacarrinho">

                        <img width="100%" src="<?php echo $url.'/view/img/produtos/'.$produto->getImagem(); ?>">


                    </div>

                    <div class="col-sm-3 tabelacarrinho">
                        <p><?php echo $produto->getDescricao(); ?></p>

                    </div>

                    <div class="col-sm-3 tabelacarrinho">

                        <a href="<?php echo $url; ?>/carrinho/remover/<?php echo $produto->getId() ?>"
                            class="btn nome-remove">Remover</a>
                    </div>
                </div>
            </div>
            <?php   
     // Fim HTML
            }
        }
    ?>

<div class="container containerfrete">
<div class="row">

            <div class="col-sm-6 container">
                <i class="fas fa-truck fa-3x"></i>
                <form method="post" action="<?php echo $url; ?>/frete/calcular">
                    <label>Frete</label>
                    <input type="text" size="6" name="cep" />
                    <button class="btn btn-outline-secondary">Calcular</button>
                </form>
               

        </div>

        <div class="col-sm-6 container">
        <?php 
        if(isset($_POST['cep'])){
            echo "<p>Preço: R$ ".$frete->getValor()."</p>";
            echo "<p>Entrega: R$ ".$frete->getPrazoEntrega()." dias</p>";
        }
        ?>
        </div>

  

        </div>
        </div>


            </div>
        </div>
    </div>
</div>
</div>
<?php include "FRONT-footer.php" ?>