<h2>Listar Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>PREÇO</th>
            <th>QUANTIDADE</th>
            <th>COR</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php 
    if (!empty($produto)){
    foreach ($produto as $produtos): ?>
    <tr>
        <td><?=$produtos['id']?></td>
        <td><?=$produtos['marca']?></td>
        <td><?=$produtos['modelo']?></td>
        <td><?=$produtos['preco']?></td>
        <td><?=$produtos['quantidade']?></td>
        <td><?=$produtos['cor']?></td>
        <td><a href="./produto/visualizar/<?=$produtos['id']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./produto/editar/<?=$produtos['id']?>" class="btn btn-info">edit</a></td>
        <td><a href="./produto/deletar/<?=$produtos['id']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; } ?>
</table>


<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>

