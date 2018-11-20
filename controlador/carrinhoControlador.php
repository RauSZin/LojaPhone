<?php

require "modelo/produtoModelo.php";

/** anon */
// unset($_SESSION["carrinho"]);
function index(){

    if (isset($_SESSION["carrinho"])) {
        $produtosCarrinho = array();
        foreach ($_SESSION["carrinho"] as $produtoID) {
            $produtosCarrinho[] = pegarProdutoPorId($produtoID["id"]);
        }
        $dados["produtos"] = $produtosCarrinho; 

// Mandar a quantidade

        exibir("carrinho/listar", $dados);
    } else {
        echo "Nao existem produtos no carrinho!";
        exibir("carrinho/listar");
    }
}

/** anon */
function adicionar($id)
{
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    $alt = false ;

    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidadeNoCarrinho"]++;
        }
    }
    if (!$alt) {
        $produto["id"] = $id;

        $produto["quantidadeNoCarrinho"] = 1;

        $_SESSION["carrinho"][] = $produto;
    }

 
   
    redirecionar("carrinho");
}

/** anon */
function deletar($id) {
    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {

        if ($_SESSION["carrinho"][$i]["id"] == $id) {

            if ($_SESSION["carrinho"][$i]["quantidadeNoCarrinho"] <= 1){

                    unset($_SESSION["carrinho"][$i]);

                }else{

                        $_SESSION["carrinho"][$i]["quantidadeNoCarrinho"] = $_SESSION["carrinho"][$i]["quantidadeNoCarrinho"] - 1; 

                }


        }
    }

        redirecionar("carrinho/index");

}
?>