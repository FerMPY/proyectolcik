<?php

if(!empty($_POST)){
	if(isset($_POST["name"])){
		if($_POST["name"]!=""){
			include "conexion.php";
			$found=false;
			$sql1= "select * from nivel where descripcion=\"$_POST[name]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nivel Ya Registrado en el Sistema.\");window.location='../ver.php';</script>";
			}else{
			    $sql = "insert into nivel(descripcion,created_at) value (\"$_POST[name]\",NOW())";
			    $query = $con->query($sql);
			    if($query!=null){
				    print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			    }else{
				    print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";
               }
			}
		}
	}
}



?>