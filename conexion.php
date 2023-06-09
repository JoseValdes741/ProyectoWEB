<?php 
$nombre = $_POST['nombre'];
$pass = $_POST['password'];

$con = mysqli_connect("mysql1:3306","root","12345678","usuarios");
$query = "select * from clientes where username='".$nombre."' and password='".$pass."'";

if($con){
    $result = mysqli_query($con, $query);

    if ($result->num_rows > 0) {
        // datos de salida en cada fula
        while($row = $result->fetch_assoc()) {
            $nombre = $row['Nombre'];
            $username = $row['Username'];
            $password = $row['Password'];
            $correo = $row['Correo'];

            echo '<!DOCTYPE html>
            <html lang="es">
            
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=1, initial-scale=1.0">
                <title>Tecnologías Computacionales I | LOGIN</title>
                <link rel="stylesheet" href="estilosesion.css">
                <link rel="shortcut icon" href="spaceman.jpg" type="image/x-icon">
            </head>
            
            <body>
                <header>
                    <div class="contentheader">
                        <img class="imagenh" src="UAEMex.png">
                        <dir></dir>
                        <nav>
                            <ul class="menu">
                                <li><a href="index.html">Salir</a></li>
                            </ul>
                        </nav>
                </header>
            
                <div class="formulario">
                    <form action="">
                        <div class="user">
                            <img src="spaceman.jpg">
                            <h1>Nombre: '.$nombre.'</h1>
                        </div>
                        <div class="infouser">
                            <h2>Contraseña: '.$password.'</h2><br>
                            <h2>Correo: '.$correo.'</h2><br>
                            <h2>UserName: '.$username.'</h2><br>
                        </div>
                    </form>
                </div>
            
                <footer>
                    <div class="conteninfo">
                        <h1>Facultad de Ingeniería</h1>
                        <h2>2023A</h2>
                        <p>Proyecto Primer Parcial | José Francisco Valdés Ortega</p>
            
                    </div>
                </footer>
            </body>
            
            </html>';
        }
      } else {
        echo'<script type="text/javascript">
        alert("Usuario o contraseña incorrectos");
        window.location.href="index.html";
        </script>';
      }

    mysqli_close($con);
}else{
    echo "No se puedo hacer la conexion, intentalo de nuevo...";
}

?>