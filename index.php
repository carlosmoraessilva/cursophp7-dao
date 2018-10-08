<?php

	require_once("config.php");

	$usuario = new Usuario();
	////$usuario->login("secreta", "secreta");
	//echo $usuario;

	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	//echo json_encode($usuarios);

//Carrega um usuario
	//$aluno = new Usuario("programador", "testei");

	
	//$aluno->insert();

	//echo $aluno;

	


	//Carrega uma lista de usuarios

	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login

	//$search = Usuario::search("ro");

	//echo json_encode($search);

	//Carrega um usuário usando o login e a senha

	//Criando um novo usuário

	$usuario = new Usuario();
	$usuario->loadById(5);
	$usuario->update("carlos", "moraes");

	echo $usuario;

	

?>