<?php

include 'conection.php';
$rs = mysql_query('select * from clientes order by nome');
$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);
?>