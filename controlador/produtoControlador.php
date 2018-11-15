<?php

require "modelo/produtoModelo.php";
require "servicos/uploadImagem.php";

/** anon */
function index() {
    $dados["produto"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}
/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        $imagem_name    = $_FILES["imagemProduto"]["name"];
        $imagem_tmp     = $_FILES["imagemProduto"]["tmp_name"];

        $diretorio_imagem   = uploadImagem($imagem_name, $imagem_tmp);

        alert(adicionarProduto($marca, $modelo, $preco, $quantidade, $diretorio_imagem));
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
        extract($_POST);
        alert(editarProduto($id, $marca, $modelo, $preco, $quantidade, $cor, $imagem));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] = "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}
/** anon */
function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}