<?php

//traigo todos los datos con metodo POST
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$dni=$_POST["dni"];
$direccion=$_POST["direccion"];
$altura=$_POST["altura"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];


//variables para la Conexion
$localhost="localhost";
$user="root";
$pass="";
$dataBase="skills";
$table="profesional";

// Creando Conexion
$conn = new mysqli($localhost, $user, $pass, $dataBase);
// Checkea Conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//creando en que tabla voy a insertar los valores
$insert = "INSERT INTO $table (nombre, apellido, dni, direccion, altura, telefono, email)
VALUES ('$nombre', '$apellido', '$dni', '$direccion', '$altura', '$telefono', '$email')";

//if(si conecta e inserta bien en las columnas que los guarde)else(que tire que hay un error al guardar)
if ($conn->query($insert) === TRUE) {
    echo "ya se ha cargado ";
} else {
    echo "Error al guardar: " . $insert . "<br>" . $conn->error;
}

//Cierra conexion
$conn->close();

?>