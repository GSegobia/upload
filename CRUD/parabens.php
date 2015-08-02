<?php

	include 'conection.php';

	$date = date("Y-m-d");
	list($anoatual, $mesatual, $diaatual) = explode("-", $date);

	$sql = mysql_query("SELECT * FROM clientes WHERE dataaniversario >= $date");

	while ($row = mysqli_fetch_array($sql)){
		list($ano, $mes, $dia) = explode("-", $row[3]);
		if ($mesatual == $mes){
			if ($diaatual == $dia){
				mail($row['email'],"Feliz aniversário!","Parabéns pelo seu dia! Da equipe A & C Advogados Associados.");
				echo "<script> alert('Enviando os Parabéns de Hoje!'); </script>";
			}
		}
	}
?>