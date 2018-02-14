<?php 

require_once("config.php");

//$sql = new SQL();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


//Carrega um usuário
//$usuario = new Usuario();
//$usuario->loadById(1);
//echo $usuario;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista em função do where
//$search = Usuario::search("s");
//echo json_encode($search);

// Carrega o resultado de um where com usuario e senha
//$usuario = new Usuario();
//$usuario->login("root", "123456");
//echo $usuario;


//Insere um usuário
//$aluno = new Usuario("aluno1", "321");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("professor", "12345678");

echo $usuario;

?>