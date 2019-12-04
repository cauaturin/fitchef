<?php include "FRONT-header.php" ?>

<div class="card titulofaixa">
      <div class="card-body titulo">
        Customize seu pedido
      </div>
    </div>


<div class="container ingredientes">
  <div class="row">

  <?php foreach($lista as $produto) { ?>
  <div class="col-sm-3 porcoes">
      <div class="card" style="width: 15rem; height: 20rem;">
      <a href="<?php echo $url; ?>/produto/detalhes/<?php echo $produto['id'] ?>" class="prato-feito-opcao"> <img src="<?php echo $url; ?>/View/img/produtos/<?php echo $produto['imagem'] ?>" class="card-img-top" alt="...">
         <div class="card-body">
          <h5 class="card-title"><?php echo $produto ['nome'] ?></h5>
          <p class="card-text"><?php echo $produto ['descricao'] ?></p>
        </div> </a>
        <a href="<?php echo $url; ?>/carrinho/adicionar/<?php echo $produto['id'] ?>" class="btn">Comprar</a>
      </div>
    </div>

<?php } ?>
   </div>
</div>






<?php include "FRONT-footer.php" ?>