<?php include "view/header.php" ?>
<form class="form-horizontal" method="post" action="cadastro">
    <fieldset>

        <!-- Form Name -->
        <legend>Cliente</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">Nome</label>
            <div class="col-md-4">
                <input id="" name="nome" value="<?php echo $cliente['nome']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>


     <div class="form-group">
            <label class="col-md-4 control-label" for="">Senha</label>
            <div class="col-md-4">
                <input id="" name="senha" value="<?php echo $cliente['senha']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>


        <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
                    <button id="" name="Cadastrar" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
    </fieldset>
</form>
<?php include "view/footer.php"?>