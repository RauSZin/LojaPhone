<?php

require "modelo/produtoModelo.php";

/** anon */
function index() {

	if (isset($_SESSION)){
		$produto = array();
		print_r($_SESSION["carrinho"]);

		foreach ($_SESSION["carrinho"] as $id) {
			$produto[] = pegarProdutoPorId($id);
		}
		print_r($produto);
		$dados["produto"] = $produto;
		exibir("carrinho/listar", $dados);
}
}

/** anon */
function adicionar($id) {

	if(isset($_SESSION)){

		$_SESSION["carrinho"][] = $id;
		
}

	redirecionar("carrinho/index");
}
?>