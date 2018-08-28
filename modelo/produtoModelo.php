<?php

function pegarTodosProdutos() {
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}

function pegarProdutoPorId($id) {
    $sql = "SELECT * FROM produto WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function adicionarProduto($marca, $modelo, $preco, $quantidade, $cor) {
    $sql = "INSERT INTO produto (marca, modelo, preco, quantidade, cor) 
			VALUES ('$marca', '$modelo', '$preco', '$quantidade', $cor)";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function editarUsuario($id, $marca, $modelo, $preco, $quantidade, $cor) {
    $sql = "UPDATE produto SET marca = '$marca', modelo = '$modelo', preco = '$preco', quantidade = '$quantidade', cor = $cor WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx)); }
    return 'produto alterado com sucesso!';
}

function deletarProduto($id) {
    $sql = "DELETE FROM produto WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}
