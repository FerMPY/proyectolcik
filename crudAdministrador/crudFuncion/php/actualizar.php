<?php

if(!empty($_POST)){
	if(isset($_POST["name"])){
		if($_POST["name"]!=""){
			include "conexion.php";
			
			$sql = "update tipofuncion set name=\"$_POST[name]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>