<?php

$id = intval($_REQUEST['id']);

include 'conection.php';

$sql = "delete from clientes where id=$id";
@mysql_query($sql);
echo json_encode(array('success'=>true));
?>