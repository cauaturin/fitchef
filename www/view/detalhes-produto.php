<?php include "FRONT-header.php" ?>
<form class="form-horizontal" method="post" action="cadastrar">
    <fieldset>

        <!-- Form Name -->
        <legend>PRODUTO</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">Nome</label>
            <div class="col-md-4">
                <input id="" name="nome" value="<?php echo $produto['nome']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="">Preço</label>
            <div class="col-md-4">
                <input id="" name="preco" type="password" placeholder="" class="form-control input-md">

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
<?php include "view/footer.php"?>