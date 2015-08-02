<?php

$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$processo = $_REQUEST['processo'];
$telefone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];
$status = $_REQUEST['status'];
$obs = $_REQUEST['observacoes'];
$niver = $_REQUEST['dataaniversario'];



include 'conection.php';

$sql = "insert into clientes(nome,cpf,processo,telefone,email,status,observacoes, dataaniversario) values('$nome','$cpf','$processo',
	'$telefone','$email','$status','$obs','$niver')";
@mysql_query($sql);
echo json_encode(array(
	'id' => mysql_insert_id(),
	'nome' => $nome,
	'cpf' => $cpf,
	'processo' => $processo,
	'telefone' => $telefone,
	'email' => $email,
	'status' => $status,
	'observacoes' => $obs,
	'dataaniversario' => $niver
));

?>