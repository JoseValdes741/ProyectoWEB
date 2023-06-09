<?php 

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$username = $_POST['username'];
$password = $_POST['password'];

$con = mysqli_connect("mysql1:3306","root","12345678","usuarios");
$query = "insert into clientes values('$username', '$nombre','$correo','$password')";

if($con){
    $result = mysqli_query($con, $query);
    if($result){
        echo'<script type="text/javascript">
        alert("Registro Correcto");
        window.location.href="index.html";
        </script>';
    }else{
        echo'<script type="text/javascript">
        alert("Usuario existente.\nIngrese otro usuario a registrar.\nDe lo contrario contacte con el administrador para solucionar su problema");
        window.location.href="registro.html";
        </script>';
    }
}else{
    echo "No se puedo hacer la conexion, intentalo de nuevo...";
}

?>