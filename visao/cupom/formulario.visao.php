<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">
    Nome do Cupom: <input type="text" name="nmCupom" value="<?=@$cupom['nmCupom']?>">
    Desconto contido: <input type="float" name="desconto" value="<?=@$cupom['desconto']?>">

<br>

    <button type="submit">Cadastrar Cupom !!</button>


</form>
$restultado_bytes = random_bytes($numero_de_bytes);
$resultado_final = bin2hex($restultado_bytes);