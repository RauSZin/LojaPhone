<?php

require "modelo/usuarioModelo.php";

/** anon */
function index() {
    if (ehPost()) {
        $login = $_POST["login"];
        $passwd = $_POST["passwd"];

        $usuario = selecionarLogin($login, $passwd);

        if (authLogin($usuario) ) {
            alert("bem vindo" . $login);
            redirecionar("usuario");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    authLogout();
    alert("deslogado com sucesso!");
    redirecionar("produto/index");
}
?>