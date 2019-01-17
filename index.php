<?php

require_once("config.php");

// Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "23456");
//echo $usuario;

//CRIANDO NOVO USUARIO
//$aluno = new Usuario("aluno","@lun0");
//$aluno->insert();
//echo $aluno;

//ALTERAR UM USUARIO
/*
$usuario = new Usuario();
$usuario->loadbyId(3);
$usuario->update("professor","!@#$%%");
echo $usuario;
 * 
 */

$usuario = new Usuario();
$usuario->loadbyId(4);
$usuario->delete();
echo $usuario;