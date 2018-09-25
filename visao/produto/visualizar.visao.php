<h2>Visão</h2>
<p>id: <?=$produto['id']?></p>
<p>Marca: <?=$produto['marca']?></p>
<p>Modelo: <?=$produto['modelo']?></p>
<img src="<?php echo $produto['imagem'];?>"></a>

<br>
<br>
<br>

<?php

print_r($produto);

?>

<a href="./carrinho/adicionar/<?=$produto['id']?>">Comprar</a>