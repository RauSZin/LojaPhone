<?php

function adicionarCupom($nmCupom, $codigo, $desconto) {
    $sql = "INSERT INTO cupom (nmCupom, codigo, desconto, quantidadeCupom) 
			VALUES ('$nmCupom', '$codigo', '$desconto', '1')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar Cupom' . mysqli_error($cnx)); }
    return 'Cupom cadastrado com sucesso!';
}

function deletarCupom($id) {
    $sql = "DELETE FROM cupom WHERE id = $idCupom";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Cupom' . mysqli_error($cnx)); }
    return 'Cupom deletado com sucesso!';
            
}

?>