<form action="<?=@$acao?>" method="POST">
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

Arquivo: <input type="file" action="upload.php" required name="imagem" enctype="multipart/form-data" value="<?=@$produto['imagem']?>">

    <button type="submit">Enviar</button>


</form>

<!-- <form action="upload.php" method="POST" enctype="multipart/form-data"> -->    
