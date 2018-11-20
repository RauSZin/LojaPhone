<?php
print_r($_SESSION["carrinho"]);
 if (isset($erro)){
    alert($erro);
 }
?>
<h2>Listar Carrinho</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NO CARRINHO</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>QUANTIDADE</th>
            <th>VISUALIZAR</th>
            <th>REMOVER DO CARRINHO</th>
            <th>PREÇO</th>    

        </tr>
    </thead>
    <?php if (isset($produtos)){
            $i = 0; foreach ($produtos as $produto): ?>
    <tr>
   
        <td><?=$produto['id']?></td>
        <td><?=$_SESSION["carrinho"][$i++]["quantidadeNoCarrinho"]?></td>
        <td><?=$produto['marca']?></td>
        <td><?=$produto['modelo']?></td>
        <td><?=$produto['quantidade']?></td>
        <td><?=$produto['preco']?></td>  
        <td><a href="./produto/visualizar/<?=$produto['id']?>" class="btn btn-secondary">VER</a></td>
        <td><a href="./carrinho/deletar/<?=$produto['id']?>" class="btn btn-danger">REMOVER</a></td>

             </tr>
            <?php endforeach; } ?>
    </table>

<a href="./produto/index" class="btn btn-primary">Produtos</a>