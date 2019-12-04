<?php include "FRONT-header.php" ?>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $url; ?>/img/veggies.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $url; ?>/img/veggies2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $url; ?>/img/marmita2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="destaque">
  <h1>Como Funciona?</h1>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card" style="width: 18rem; height: 20rem;">
          <img src="<?php echo $url; ?>/img/1.png" style="width:100%; height: 50%;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Escolha</h5>
            <p class="card-text">Temos uma grande variedade de pratos, mas se preferir pode montar o seu!</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem; height: 20rem">
          <img src="<?php echo $url; ?>/img/2.png" style="width:100%; height: 50%;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aguarde chegar</h5>
            <p class="card-text">Vamos trabalhar o melhor possível para estar na sua casa bem rapidinho.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem; height: 20rem">
          <img src="<?php echo $url; ?>/img/3.png" style="width:100%; height: 50%;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Desfrute</h5>
            <p class="card-text">Alimentos saudáveis onde você estiver, para uma vida de qualidade!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <button type="button" class="btn">Saiba mais</button>

</div>

<br>
<br>
<br>

<img src="<?php echo $url; ?>/img/marmita2.jpg" class="imgestatica">

<br>
<br>
<br>

<div class="destaque">
  <h1>Cardápio da semana</h1>
</div>

<div class="container">
  <div class="row">

<?php foreach($lista as $produto) { ?>
  <div class="col-sm-3">
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