<?php
require('bancoCadastro.php');
require('classCadastro.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$estados = $_POST['estados'];
$cidades = $_POST['cidades'];
$email = $_POST['email'];
$conf_email = $_POST['email'];
$cpf = $_POST['cpf'];

$a = new Cadastro();
$a->setNome($nome);
$a->setEmail($email);
$a->setTelefone($telefone);
$a->setCidades($cidades);
$a->setEstados($estados);
$a->setCpf($cpf);
$a->setConfirmaEmail($conf_email);

$sql = "INSERT INTO cadastro
(nome,
email,
cidades,
estados,
cpf,
conf_email,
telefone)
VALUES
('". $a->getNome() ."',
'". $a->getEmail() ."',
'". $a->getCidades() ."',
'". $a->getEstados() ."',
'". $a->getCpf() ."',
'". $a->getConfirmaEmail() ."',
'". $a->getTelefone() ."')";

if ($conn->query($sql) === true) {
	echo
		"<script language='javascript' type='text/javascript'>
alert('Cadastro realizado com sucesso!');
window.location.href='../paginaCadastro.php';</script>";
	die();
} else {
	echo "Erro: " . $sql . "<br>"
		. $conn->error;
	echo "<br>";
	echo "Não foi possivel realizar 
	o cadastro";
}
//finaliza a conexão com o banco
$conn->close();

?>