<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">
    marca: <input type="text" name="marca" value="<?=@$produto['marca']?>">
    modelo: <input type="text" name="modelo" value="<?=@$produto['modelo']?>">
   	preco: <input type="text" name="preco" value="<?=@$produto['preco']?>">
    quantidade: <input type="text" name="quantidade" value="<?=@$produto['quantidade']?>">

<br>

Imagem: <input type="file" id="exampleInputFile" class="form" name="imagemProduto">

    <button type="submit">Enviar</button>


</form>