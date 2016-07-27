<?php
	mysql_connect('localhost','root','');
	mysql_select_db("grifo");

	$opt=$_REQUEST["opt"];

	if($opt=="add"){
		$idc=$_REQUEST["id_cliente"];
		$nom=$_REQUEST["nombre"];
		$dni=$_REQUEST["dni"];
		$ruc=$_REQUEST["ruc"];
		$total=$_REQUEST["total"];
		

		mysql_query("INSERT INTO boletaf values('','$idc','$nom','$dni','$ruc','$total')");
		echo "Los datos del trabajdor se ingresaron perfectamente";
	}
	
	if($opt=="del"){
		$id=$_REQUEST["id"];
		mysql_query("DELETE FROM boletaf WHERE id=$id");
		echo "se  elimino al boletaf";
	}

	if($opt=="edit"){
		$idc=$_REQUEST["id_cliente"];
		$nom=$_REQUEST["nombre"];
		$dni=$_REQUEST["dni"];
		$ruc=$_REQUEST["ruc"];
		$total=$_REQUEST["total"];

		mysql_query("UPDATE boletaf SET id_cliente='$idc',nombre='$nom',dni='$dni',ruc='$ruc',total='$total' WHERE id=$id");
		echo "Registro actualizado satistactoriamente";
	}

?>

