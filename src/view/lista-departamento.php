<?php include "view/header.php" ?>
<table class="table">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">SERVIÇO</th>
            
        </tr>
</thead>
<tbody>
    <?php foreach($lista as $departamento) { ?>
        <tr>
            <th scope="row"><?php echo $departamento['pk_departamento'] ?>
            <td><?php echo $departamento ['nome'] ?></td>
     
    </tr>
    <?php } ?>
</table>
<?php include "view/footer.php"?>