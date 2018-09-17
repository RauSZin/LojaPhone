<?php

require "modelo/produtoModelo.php";

/** annon */
function index() {
    $dados["produto"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}
/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarProduto($marca, $modelo, $preco, $quantidade, $cor));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}
/** admin */
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index");
}
/** admin */
function editar($id) {
    if (ehPost()) {
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        alert(editarProduto($marca, $modelo, $preco, $quantidade));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] = "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}
/** annon */
function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}