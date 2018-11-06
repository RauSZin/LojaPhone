<?php

 $_SESSION["erro"] = false;

 if(!empty($erro)){

  foreach ($erro as $erros){

  alert($erros);
  echo $_SESSION["erro"][9];

 }
}

?>
<form action="<?=@$acao?>" method="POST">
    nome: <input type="text" name="nome" value="<?=@$usuario['nome']?>">
    sobrenome: <input type="text" name="sobrenome" value="<?=@$usuario['sobrenome']?>">
    email: <input type="text" name="email" value="<?=@$usuario['email']?>">
        <select name="sexo">
        <option value="m" <?=@assinalarCampo($usuario['sexo'], 'm')?>>Masculino</option>
        <option value="f" <?=@assinalarCampo($usuario['sexo'], 'f')?>>Feminino</option>
    </select>

    senha: <input type="password" name="senha" value="<?=@$usuario['senha']?>">
    confirmar senha: <input type="password" name="csenha" value="<?=@$usuario['csenha']?>">
    numero: <input type="text" name="numero" value="<?=@$usuario['numero']?>">
    CPF: <input type="text" name="cpf" value="<?=@$usuario['cpf']?>">


    <button type="submit">Enviar</button>
</form>



<!-- <!p>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">

<html lang="en"><head>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Formulário para cadastrar -->

<h1>Formulário de cadastro</h1>

	

		<!-- <label for="nome">Nome</label>

		<input id="nome" type="Text" name="nome">

		<label for="sobrenome">Sobrenome</label>

		<input id="sobrenome" type="Text" name="sobrenome"><br>

		<label for="email">Email</label>

		<input id="email" type="Text" name="email"><br>

		<label for="sexo">Sexo</label>

		<select id="sexo" name="sexo">

			<option name="sexo">Masculino</option>
			<option name="sexo">Feminino</option>
			<option name="sexo">Outro</option>

		</select><br>

		<label for="num">Telefone</label>

		<input id="num" type="number" name="telefone"><br>

		<label for="cpf">CPF</label>

		<input id="cpf" type="number" name="cpf">

		<br>

		<label for="senha">senha</label>
		<input type="password" name="senha">

		<label for="csenha">Confirme sua senha</label>
		<input type="password" name="csenha">
		<br>
		
		<input type="Submit" name="Enviar">

	</form> -->
<!--_____________________________________________________-->

<!-- <form action="<?=@$acao?>" method="POST">

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="nome">Nome</label>

<input type="text" class="form-control" name="nome" placeholder="Nome" value="<?=@$usuario['nome']?>">

    </div>
    <div class="form-group col-md-3">
      <label for="sobrenome">Sobrenome</label>

<input  id="sobrenome"  type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="<?=@$usuario['sobrenome']?>">

    </div>
  </div>
  <div class="form-group col-md-3">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
  </div>
   <div class="form-group col-md-3">
    <label for="csenha">Confirme sua senha</label>
    <input type="password" class="form-control" id="csenha" placeholder="Senha" name="csenha">
  </div>
    <div class="form-group col-md-3">
    <label for="email">Email</label>

		<input  class="form-control" id="email" placeholder="Email" type="text" name="email" value="<?=@$usuario['email']?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="telefone">Telefone</label>

      	<input  class="form-control" id="telefone" placeholder="Telefone" type="text" name="telefone" value="<?=@$usuario['telefone']?>">

    </div>
   <div class="form-row">
    <div class="form-group col-md-3">
      <label for="cpf">Cpf</label>
      <input type="number" class="form-control" id="cpf" name="cpf" placeholder="Cpf">

      	<input  class="form-control" id="cpf" placeholder="CPF" type="numb" name="cpf" value="<?=@$usuario['cpf']?>">

    </div>
    <div class="form-group col-md-3">
      <label for="inputSexo">Sexo</label>
      <select id="inputSexo" class="form-control" name="sexo">
        <option selected>Escolha...</option>
        <option name="sexo">Masculino</option>
        <option name="sexo">Feminino</option>
        <option name="sexo">Outros</option>
      </select>
    </div>
  </div>

  Data de nascimento:
		<select name="vdia">
			<?php
			for ($dia=1; $dia <= 31; $dia++) { 
				echo "<option>$dia</option>";
			}
			?>
		</select>
		<select name="vmes">
			<?php
			for ($mes=1; $mes <= 12; $mes++) { 
				echo "<option>$mes</option>";
			}
			?>
		</select>
		<select name="vano">
			<?php
			for ($ano=1960; $ano < 2010; $ano++) { 
				echo "<option>$ano</option>";
			}
			?>
		</select>
 -->
  <!-- Example single danger button -->
<!-- 
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
 -->
<!--________________________________________________________________-->

<!-- Caso já tenha conta ele poder ir para o login -->
<!-- 
		<h2><a href="login.php">Login</h2>

</body>
</html> -->