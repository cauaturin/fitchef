<?php require_once "FRONT-header.php" ?>


<div class="container contatolocal">
    <div class="row">
    <div class="col-sm-6 contato">
    
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
  <legend>Entre em contato</legend>

<!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="nome">Nome</label>  
    <div class="col-md-9">
    <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
      
    </div>
  </div>

<!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="email">E-mail</label>  
    <div class="col-md-9">
    <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
    <span class="help-block"> </span>  
    </div>
  </div>

<!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="assunto">Assunto</label>  
    <div class="col-md-9">
    <input id="assunto" name="assunto" type="text" placeholder="" class="form-control input-md" required="">
      
    </div>
  </div>

<!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
    <div class="col-md-9">                     
      <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
    </div>
  </div>

<!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="botao"></label>
    <div class="col-md-4">
      <button id="botao" name="botao" class="btn btn-success">Enviar</button>
    </div>
  </div>

  </fieldset>
  </form>

    
</div>
    
    <div class="col-sm-6 local">
        <h1>Localização:</h1>
        <br>
        <div class="mapa">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.3566661219706!2d-43.56102038513362!3d-22.900211885015125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9be15839e68c4f%3A0x588a284ae162bc38!2sSenac%20Campo%20Grande!5e0!3m2!1spt-PT!2sbr!4v1573584879639!5m2!1spt-PT!2sbr" width="550" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        
    </div>
</div>
</div>
</div>
<br><br>
<?php include "FRONT-footer.php" ?>

    
