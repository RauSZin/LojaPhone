<?php

require_once "modelo/usuarioModelo.php";


/** anon */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

/** anon */
function adicionar() {
    if (ehPost()) {
        extract($_POST);

        $nome = validarNomes($nome);
        $sobrenome = validarNomes($sobrenome);
        $email = validarEmail($email);
        $sexo = validarSexo($sexo);
        $numero = validarNumero($numero);
        $cpf = validarCpf($cpf);
        $senha = validarSenha($senha, $csenha);

        echo $_SESSION["erro"];

 if ($_SESSION["erro"][0] == true){

        alert(adicionarUsuario($nome, $sobrenome, $email, $sexo, $numero, $cpf, $senha));
} else{

    echo $_SESSION["erro"];

}      
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