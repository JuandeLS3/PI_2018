<?php
	include 'connection.php';

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$dni = $_POST['dni'];
	$alias = $_POST['username'];
	$password = $_POST['pass'];
	$pais = $_POST['pais-usu'];
	$email = $_POST['mail'];
	$provincia = $_POST['provincia-usu'];
	$direccion = $_POST['direccion'];
	$cp = $_POST['cp-usuario'];
	$telefono = $_POST['telefono'];
	$categoria = $_POST['categoria'];
    $imagen_perfil = 'user-default.png';
	  
	$sql = "INSERT INTO usuario (nif,nombre,apellidos,telefono,pais,alias,email,cp,imagen_perfil,provincia,direccion,actividad_fav,password)
	VALUES ('$dni','$nombre', '$apellidos','$telefono','$pais','$alias','$email','$cp','$imagen_perfil','$provincia','$direccion','$categoria',MD5('".$password."'));";
	if ($conexion->query($sql) === TRUE) {
	    header('location: ../content/login.html?register=user');
	} else {
	    echo "Error: " . $sql . "<br>" . $conexion->error;
	}