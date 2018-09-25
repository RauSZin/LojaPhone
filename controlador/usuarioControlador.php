<?php

require_once "modelo/usuarioModelo.php";

/** anon */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarUsuario($nome, $sobrenome, $email, $sexo, $numero, $cpf, $senha));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}

/** admin */
function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}

/** admin  */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        alert(editarUsuario($id, $nome, $email));
        redirecionar("usuario/index");
    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        $dados['acao'] = "./usuario/editar/$id";
        exibir("usuario/formulario", $dados);
    }
}

/** anon */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}
function perfil(){

    $dados = array();
    $dados = $_SESSION["auth"];

    exibir ("usuario/visualizarPerfil", $dados);

}