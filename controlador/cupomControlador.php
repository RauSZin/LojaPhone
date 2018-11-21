<?php

require "modelo/produtoModelo.php";

function adicionar(){

	if(ehPOST()){

		extract($_POST);

	$calculo = random_bytes(6);
	$codigo = bin2hex($calculo);

        alert(adicionarCupom($nmCupom, $codigo, $desconto));
        redirecionar("produto/index");
	}

}

?>