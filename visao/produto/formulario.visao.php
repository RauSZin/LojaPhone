<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">
    marca: <input type="text" name="marca" value="<?=@$produto['marca']?>">
    modelo: <input type="text" name="modelo" value="<?=@$produto['modelo']?>">
   	preco: <input type="text" name="preco" value="<?=@$produto['preco']?>">
    quantidade: <input type="text" name="quantidade" value="<?=@$produto['quantidade']?>">

<br>

 <select name="cor">
           <option value="azul" <?=@assinalarCampo($produto['cor'], 'azul')?>>Azul</option>    
           <option value="vermelho" <?=@assinalarCampo($produto['cor'], 'vermelho
         ')?>>Vermelho</option>
     </select>

<br>

Imagem: <input type="file" id="exampleInputFile" class="form" name="imagemProduto">

    <button type="submit">Enviar</button>


</form>

<!-- <form action="upload.php" method="POST" enctype="multipart/form-data"> -->    
