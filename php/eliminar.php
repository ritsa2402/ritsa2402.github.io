<?php
    $id= $_POST['id'];

    $host="localhost";
    $bd= "login";
    $user= "root";
    $pass= "";
    $conn= mysqli_connect($host, $user, $pass, $bd);

    $sql= "DELETE FROM coment WHERE id='".$id."'";

    if(mysqli_query($conn, $sql)){
        echo "Producto eliminado";
    }else{
        echo "error".$sql;
    }
?>