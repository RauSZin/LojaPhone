<h2>Listar Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>PREÇO</th>
            <th>QUANTIDADE</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php 
    if (!empty($produtos)){
    foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['id']?></td>
        <td><?=$produto['marca']?></td>
        <td><?=$produto['modelo']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['quantidade']?></td>
        <td><?=$produto['cor']?></td>
        <td><a href="./produto/visualizar/<?=$produto['id']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./produto/editar/<?=$produto['id']?>" class="btn btn-info">edit</a></td>
        <td><a href="./produto/deletar/<?=$produto['id']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; } ?>
</table>


<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>

