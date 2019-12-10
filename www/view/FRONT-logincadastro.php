<?php require_once "FRONT-header.php"; ?>

<div class="sectiongray">
<div class="container login">

	<div class="row">
	

		<div class="col-sm-6 login-detalhes">
			<form method="post" action="<?php echo $url;?>/cliente/logar" class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Login</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email">E-mail</label>  
			  <div class="col-md-9">
			  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="senha-login">Senha</label>
			  <div class="col-md-9">
			    <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">
			    <a href="#"><span class="forget help-block">Esqueci minha senha</span></a>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnregister"></label>
			  <div class="col-md-9">
			    <button id="btnregister" name="btnregister" class="btn">Entrar</button>
			  </div>
			
			</div>
			</fieldset>
			</form>

		</div>


	<div class="col-sm-6 login-detalhes">

			<form method="post" action="<?php echo $url;?>/cliente/cadastrar" class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Cadastre-se</legend>

			
<?php include "mensagem.php"; ?>

		
			</fieldset>



			</form>


			</div>
			</div>

</div>
</div>
</div>
<?php include "FRONT-footer.php" ?>