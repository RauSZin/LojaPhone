<form action="<?=@$acao?>" method="POST">
    marca: <input type="text" name="marca" value="<?=@$produto['marca']?>">
    modelo: <input type="text" name="modelo" value="<?=@$produto['modelo']?>">
   	preco: <input type="text" name="preco" value="<?=@$produto['preco']?>">
    quantidade: <input type="text" name="quantidade" value="<?=@$produto['quantidade']?>">

    <select name="cor">
        <option value="azul" <?=@assinalarCampo($produto['cor'], 'azul')?>>Azul</option>
        <option value="vermelho" <?=@assinalarCampo($usuario['cor'], 'vermelho
        ')?>>Vermelho</option>
    </select>
    <button type="submit">Enviar</button>
</form>