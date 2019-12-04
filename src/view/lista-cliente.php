<?php include "view/header.php" ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">CPF</th>
            <th scope="col">CEP</th>
            <th scope="col">ENDERECO</th>
        </tr>
</thead>
<tbody>
    <?php foreach($lista as $cliente) { ?>
        <tr>
            <th scope="row"><?php echo $cliente['pk_cliente'] ?>
            <td><?php echo $cliente ['nome'] ?></td>
            <td><?php echo $cliente ['telefone'] ?></td>
            <td><?php echo $cliente ['email'] ?></td>
            <td><?php echo $cliente ['cpf'] ?></td>
            <td><?php echo $cliente ['cep'] ?></td>
            <td><?php echo $cliente ['endereco'] ?></td>
    </tr>
    <?php } ?>
</table>
<?php include "view/footer.php"?>