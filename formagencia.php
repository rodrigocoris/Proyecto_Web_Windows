<?php 

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="formulariosesion";


$con =mysqli_connect($db_host, $db_user, $db_password,$db_name);

if(!$con){
    die("Error " . mysqli_connect_error());
}else{
    echo "conectado..";
}


//Usuario
//iformacion a agregar

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

//Consulta en la base de datos

$inser = "INSERT INTO formagencia(id, nombre, correo, contrasena)
    values ('0', '$nombre','$correo','$contrasena')";

    $ir=mysqli_query($con,$inser);

    if($ir){
        header("Location: loginagencia.html");
       

    }else{
        header("Location: formagencia.html");
        
    }



    mysqli_close($con)
?>