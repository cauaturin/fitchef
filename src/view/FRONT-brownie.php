<?php require_once "FRONT-header.php" ?>

<div class="card titulofaixa">
      <div class="card-body">
        Sobremesas
      </div>
    </div>



<div class="container boxingrediente">
	<div class="row">
		<div class="product-img col-sm-6">
			<img src="<?php echo $url; ?>/img/brownie.jpg" alt="brownie" width="450px" height="370px;">
		</div>
		
		<div class="product-description col-sm-6">
			<h2>Brownie FitChef</h2>
			<p><strong></strong><br>
				<br>
                
                	<br>
					Ovos	<br>
					Adoçante sucarolose	<br>
				   Chocolate meio amargo zero açúcar;	<br>
					Farinha de aveia sem glúten;	<br>
					Cacau em pó zero açúcar;<br>
					Chá de fermento em pó.	<br>
          
		<br>
		
			<div data-app="product.quantity" id="quantidade">
			  <span id="span_erro_carrinho" class="blocoAlerta" style="display:none;">1</span>
			  <label>Quantidade:</label>     
			  <input id="quant" name="quant" class="text" size="1" type="number" value="1" maxlength="5" />
			</div>
			<button type="button" class="btn btn">Comprar</button>
			</div>
			
		</div>
</div>

<?php require_once "FRONT-footer.php" ?>
