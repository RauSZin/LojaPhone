<h2>Listar Carrinho</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>PRECO</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($produto as $produtos): ?>
    <tr>
        <td><?=$produtos['id']?></td>
        <td><?=$produtos['marca']?></td>
        <td><?=$produtos['modelo']?></td>
        <td><a href=".produto/visualizar/<?=$produtos['id']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./carrinho/deletar/<?=$produtos['id']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./produto/index" class="btn btn-primary">Produtos</a>