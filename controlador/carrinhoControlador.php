<?php

require "modelo/produtoModelo.php";

/** anon */
function index() {

	if (isset($_SESSION["carrinho"])){
		$produto = array();

		foreach ($_SESSION["carrinho"] as $id) {
			$produto[] = pegarProdutoPorId($id);
		}
		
		$dados["produto"] = $produto;
		exibir("carrinho/listar", $dados);
	}else{

 echo ("Não há produtos na loja");
 exibir("carrinho/listar");
	}
}

/** anon */
function adicionar($id) {

		$_SESSION["carrinho"][] = $id;

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