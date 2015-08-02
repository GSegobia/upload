<?php

$id = intval($_REQUEST['id']);
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$processo = $_REQUEST['processo'];
$telefone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];
$status = $_REQUEST['status'];
$obs = $_REQUEST['observacoes'];
$niver = $_REQUEST['dataaniversario'];

include 'conection.php';

$sql = "update clientes set nome='$nome',cpf='$cpf',processo='$processo',telefone='$telefone',email='$email',
		status='$status',observacoes='$obs',dataaniversario='$niver' where id=$id";
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