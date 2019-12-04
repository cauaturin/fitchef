<?php include "header.php" ?>
<form class="form-horizontal" method="post" action="cadastrar" enctype="multipart/form-data">
    <fieldset>

        <!-- Form Name -->
        <legend>Cadastro de Produtos</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">Nome</label>
            <div class="col-md-4">
                <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="">Preco</label>
            <div class="col-md-4">
                <input id="preco" name="preco" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="">Descrição</label>
            <div class="col-md-4">
                <input id="descricao" name="descricao" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

                
    <!-- Text input-->
    <div class="form-group">
                <label class="col-md-4 control-label" for="descricao">Imagem    </label>  
                <div class="col-md-4">
  <input id="imagem" name="imagem" type="file" placeholder="" class="form-control input-md" required="">
  </div>
            </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="departamento">Departamento</label>
            <div class="col-md-4">
                <select name="departamento" class="form-control input-md">
                <?php foreach($lista as $departamento) { ?>
                <option value="<?php echo $departamento['pk_departamento']?>">
                <?php echo $departamento['nome'] ?></option>
                <?php } ?>
                </select>

            </div>
        </div>


        <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
                    <button id="" name="Cadastrar" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
    </fieldset>
</form>
<?php require_once "footer.php" ?>