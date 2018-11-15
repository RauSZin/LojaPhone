<?php

require "modelo/produtoModelo.php";

/** anon */
function index() {

	if (empty($_SESSION["carrinho"])){
		$produto = array();
		foreach ($_SESSION["carrinho"] as $id) {
			$produto[] = pegarProdutoPorId($id);
		}
		$quantidade = array();
		foreach ($_SESSION["carrinho"] as $produto) {
			$quantidade = $produto["quantidade"];
		}
		$dados["quantidade"] = $quantidade;

		exibir("carrinho/listar", $dados);
	}else{
 echo ("Não há produtos na loja");
 exibir("carrinho/listar");
	}
}

/** anon */
function adicionar($id) {

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    $carrinhoEncontrado = false;
    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $_SESSION["carrinho"][$i]["quantidade"]++;

            $carrinhoEncontrado = true;
        }
    }
    if ($carrinhoEncontrado == false) {

        $produto["id"] = $id;
        $produto["quantidade"] = 1;
        $_SESSION["carrinho"][] = $produto;
    }
    redirecionar("carrinho/index");
}

/** anon */
function deletar($id){


	if(isset($_SESSION["carrinho"])){

		$key = array_search($id, $_SESSION['carrinho']);

		if($key!==false){
    		unset($_SESSION['carrinho'][$key]);
		}
	redirecionar("carrinho/index");
	}
}
?>