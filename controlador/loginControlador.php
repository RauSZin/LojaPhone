<?php

require "modelo/usuarioModelo.php";

/** annon */
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

/** user */
function logout() {
    authLogout();
    alert("deslogado com sucesso!");
    redirecionar("usuario");
}
?>