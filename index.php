<?php

require_once("config.php");

//comentado por que vamos usar somente a classe Usuario
/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//usando a classe Usuario: só carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;


//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("Jo");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("Elaine", "12");

echo $usuario;
 ?>