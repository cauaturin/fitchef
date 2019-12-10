<?php require_once "FRONT-header.php" ?>

<div class="card titulofaixa">
      <div class="card-body titulo">
        Porções
      </div>
    </div>



<div class="container boxingrediente">
	<div class="row">
		<div class="product-img col-sm-6">
			<img src="<?php echo $url; ?>/img/arroz.jpg" alt="arroz" width="450px" height="370px;">
		</div>
		
		<div class="product-description col-sm-6">
			<h2>Arroz - 100g</h2>
			<p><strong>Quantidade por 100 gramas:</strong><br>
				Valor energético	159.2kcal	<br>
                Proteínas	32,0g	<br>
                Gorduras saturadas	0,9g	<br>
                Gorduras monoinsaturadas	0,9g	<br>
                Gorduras poliinsaturadas	0,3g	<br>
                Cálcio	5,3mg	<br>
                Magnésio	18,3mg	<br>
                Colesterol	89,1mg	<br>
                Lipídios	2,5g	<br>
                Fósforo	295,0mg	4<br>
                Ferro	0,3mg	<br>
                Potássio	387,4mg	<br>
                Cobre	0,0ug	<br>
                Zinco	0,8mg	<br>
                Niacina	24,8mg	<br>
                Tiamina B1	0,1mg	<br>
                Sódio	50,3mg	<br>
		<br>
		
			<div data-app="product.quantity" id="quantidade">
			  <span id="span_erro_carrinho" class="blocoAlerta" style="display:none;">1</span>
			  <label>Quantidade:</label>     
			  <input id="quant" name="quant" class="text" size="1" type="number" value="1" maxlength="5" />
			</div>
			<button type="button" class="btn">Comprar</button>
			</div>
			
		</div>
</div>

<?php require_once "FRONT-footer.php" ?>