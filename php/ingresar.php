<?php

    $correo= $_POST['correo'];
    $contrasena= $_POST['contrasena'];

    $host="localhost";
    $bd= "login";
    $user= "root";
    $pass= "";
    $conn= mysqli_connect($host, $user, $pass, $bd);

    $consulta="SELECT * FROM registro WHERE correo= '$correo' and contrasena= '$contrasena'";
    $sql= mysqli_query($conn, $consulta);

    $usere=mysqli_num_rows($sql);

    if($usere){
        header("location:../index.php");
    }else{
        echo'<script language="javascript">alert("Contraseña o Correo erroneos"); window.location.href="../login.php";</script>';

    }
?>