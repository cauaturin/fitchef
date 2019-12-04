<?php include "header.php" ?>
<br><br><br><br><br>

<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">PREÇO</th>
            <th scope="col">DESCRIÇÃO</th>
            <th scope="col">DEPARTAMENTO</th>
            <th scope="col"></th>
       
        </tr>
</thead>
<tbody>
    <?php foreach($lista as $produto) { ?>

        <tr>
        <td><img width="50" src="../View/img/produtos/<?php echo $produto['imagem'] ?>"></td>

            <th scope="row"><?php echo $produto['id'] ?>
            <td><?php echo $produto ['nome'] ?></td>
            <td>R$<?php echo number_format( $produto ['preco'],2,",","."); ?></td>
            <td><?php echo $produto ['descricao'] ?></td>
            <td><?php echo $produto ['departamento'] ?></td>
     

    </tr>
    <?php } ?>
</table>
<?php include "view/footer.php"?>