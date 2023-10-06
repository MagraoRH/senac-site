<?php
require ('conexao-faleconosco.php');
require ('class-faleconosco.php');

$nome = $_POST['nome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$cemail = $_POST['cemail'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$modalidade = $_POST['modalidade'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$cpf = $_POST['cpf'];

$a = new Faleconosco();
$a->setNome($nome);
$a->setEmail($email);
$a->setTelefone($telefone);
$a->setCidades($cidades);
$a->setEstados($estados);
$a->setCpf($cpf);
$a->setConfirmaEmail($cemail);
$a->setDdd($ddd);
$a->setModalidade($modalidade);
$a->setAssunto($assunto);

$sql = "INSERT INTO formulario
(assunto,cemail,cidade,cpf,ddd,email,estado,mensagem,modalidade,nome,telefone)VALUES
('". $a->getAssunto() ."','". $a->getConfirmaEmail() ."','". $a->getCidades() ."',
'". $a->getCpf() ."','". $a->getDdd() ."','". $a->getEmail() ."','". $a->getEstados() ."','". $a->getMensagem() ."','". $a->getModalidade() ."',
'". $a->getNome() ."','". $a->getTelefone() ."')";
if($conn->query($sql)=== true){
echo 
"<script language='javascript' type='text/javascript'>
alert('Cadastro realizado com sucesso!');
window.location.href='../paginaFaleConosco.php';</script>";
die();
}else{
	echo "Erro: ".$sql."<br>"
	.$conn->error;
	echo "<br>";
	echo "Não foi possivel realizar 
	o cadastro";
}
//finaliza a conexão com o banco
$conn->close();

?>