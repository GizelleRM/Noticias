<?php  
function conectar(){
    $user= "root"; //USUARIO
    $pass="";      //CONTRASEÑA 
    $server= "localhost"; //SERVIDOR
    $db= "structure_news"; //NOMBRE DE LA BASE DE DATOS
    $con=mysqli_connect("localhost","root","","structure_news") or die("Some error occurred during connection " . mysqli_error($con));
    //echo "successsssssssss";

    return $con;
}
?>

