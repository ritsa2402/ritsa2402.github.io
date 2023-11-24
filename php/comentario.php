<?php
    $titulo= $_POST['titulo'];
    $comentario= $_POST['comentario'];

    $host="localhost";
    $bd= "login";
    $user= "root";
    $pass= "";
    $conn= mysqli_connect($host, $user, $pass, $bd);

    $sql="INSERT INTO coment(titulo, comentario)values( '$titulo', '$comentario')";
    
    if(mysqli_query($conn, $sql)){
        echo'<script language="javascript">alert("Guardado"); window.location.href="../index.php";</script>';
    }else{
        echo "Faltan campos".$sql;
    }

    
?>