<?php

require "modelo/produtoModelo.php";

/** anon */
function index() {
	//verificar se existe a sessao carrinho
	//se existir, pegar a sessao carrinho
	//percorrer o vetor da sessao pegando os IDs do produto
	//para cada ID da lista de IDS na sessao carrinho faca
	$produto = pegarProdutoPorId($id);

	exibir("carrinho/carrinho", $dados);


}

/** anon */
function adicionar($id) {
	//pegar o id
	//verificar se existe a sessao carrinho
	//adicionar o ID na sessao carrinho
}