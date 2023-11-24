<?php
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $correo= $_POST['correo'];
    $contrasena= $_POST['contrasena'];

    $host="localhost";
    $bd= "login";
    $user= "root";
    $pass= "";
    $conn= mysqli_connect($host, $user, $pass, $bd);

    $sql="INSERT INTO registro(nombres, apellidos, correo, contrasena)values( '$nombre', '$apellido', '$correo', '$contrasena')";
    /*if(!$conn){
        die("error al conectar".mysqli_connect_error());
    }else{
        echo "conexion exitosa";
    }*/
    if(mysqli_query($conn, $sql)){
        echo "Producto guardado";
    }else{
        echo "error".$sql;
    }
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['correo']) && !empty($_POST['contrasena'])){
            $header = "From: ritsainygarcia24@gmail.com";
            $header = "Reply-To: ritsainygarcia24@gmail.com";
            $header = "X-Mailer: PHP/". phpversion();
            $mail = @mail($correo,$nombre,$header);
            if($mail){
                echo'<script language="javascript">alert("Correo enviado exitosamente"); window.location.href="../index.php";</script>';
            }
        }
    }
?>