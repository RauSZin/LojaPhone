-- É só copiar e colar

create database bdloja;
use bdloja;

	create table usuario(

		id INT(100) AUTO_INCREMENT,
		tipo VARCHAR(5) NOT NULL,
		nome VARCHAR(60) NOT NULL,
		sobrenome VARCHAR(60),
		email VARCHAR(60) NOT NULL,
		sexo VARCHAR(9),
		numero VARCHAR(11),
		cpf VARCHAR(11),
		senha VARCHAR(60) NOT NULL,
		data datetime,
		PRIMARY KEY(id)

	)engine = innoDB;

	create table produto(

	id INT(100) AUTO_INCREMENT,
	imagem VARCHAR(100),
	marca VARCHAR(10) NOT NULL,
	modelo VARCHAR(10) NOT NULL,
	preco DECIMAL(6,2),
	quantidade INT(100),
	cor VARCHAR(10),
	
	PRIMARY KEY(id)

	)engine = innoDB;

	create table cor(

	id INT(100) AUTO_INCREMENT,	
	nomeCor VARCHAR(60) NOT NULL,


	PRIMARY KEY(id)

	)engine = innoDB;



/*------Usuário administrador------*/

	INSERT into usuario(tipo,nome,sobrenome,email,sexo,numero,cpf,senha,data)
				values("admin","Raul","Rodrigues","raul.ifsp@gmail.com","Masculino",998167969,123,"123123123","2001-08-01");

/*---------------------------------*/