<?php

	require_once("config.php");

	$usuario = new Usuario();
	$usuario->login("user", '12345');
	echo $usuario;

	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	//echo json_encode($usuarios);

//Carrega um usuario
/*	$root = new Usuario();

	$root->loadbyId(4);

	echo $root;
*/

	//Carrega uma lista de usuarios

	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login

	//$search = Usuario::search("ro");

	//echo json_encode($search);

	//Carrega um usuário usando o login e a senha

	

?>