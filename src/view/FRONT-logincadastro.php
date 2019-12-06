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

			<div class="form-group">
			  <label class="col-md-4 control-label" for="nome">Nome completo</label>  
			  <div class="col-md-9">
			  <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-8 control-label" for="telefone">Telefone</label>  
			  <div class="col-md-9">
			  <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="cpf">CPF</label>  
			  <div class="col-md-9">
			  <input id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email">E-mail</label>  
			  <div class="col-md-9">
			  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="endereco">Endereço</label>  
			  <div class="col-md-9">
			  <input id="endereco" name="endereco" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="cep">CEP</label>  
			  <div class="col-md-9">
			  <input id="cep" name="cep" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="senha">Senha</label>
			  <div class="col-md-9">
			    <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnregister"></label>
			  <div class="col-md-9">
			    <button id="btnregister" name="btnregister" class="btn">Cadastrar</button>
			  </div>
			</div>

			</fieldset>



			</form>


			</div>
			</div>

</div>
</div>
</div>
<?php include "FRONT-footer.php" ?>