<?php
 if (isset($erro)){
    alert($erro);
 }
?>
<h2>Listar Carrinho</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>QUANTIDADE</th>
            <th>VISUALIZAR</th>
            <th>REMOVER DO CARRINHO</th>
            <th>PREÇO</th>    

        </tr>
    </thead>
    <?php if (!empty($produto)){
        foreach ($produto as $produtos): ?>
    <tr>
        <td><?=$produtos['id']?></td>
        <td><?=$produtos['marca']?></td>
        <td><?=$produtos['modelo']?></td>
        <td><?=$produtos['quantidade']?></td>
        <td><a href="./produto/visualizar/<?=$produtos['id']?>" class="btn btn-secondary">VER</a></td>
        <td><a href="./carrinho/deletar/<?=$produtos['id']?>" class="btn btn-danger">REMOVER</a></td>
        <td><?=$produtos['preco']?></td>
    </tr>
     <?php endforeach; } ?>
</table>

<a href="./produto/index" class="btn btn-primary">Produtos</a>