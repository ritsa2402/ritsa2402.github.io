<?php
    $titulo= $_POST['titulo'];
    $comentario= $_POST['comentario'];
    $id= $_POST['id'];


    $host="localhost";
    $bd= "login";
    $user= "root";
    $pass= "";
    $conn= mysqli_connect($host, $user, $pass, $bd);

    $sql="UPDATE coment SET titulo='".$titulo."', comentario='".$comentario."' WHERE id='".$id."'";

    if(mysqli_query($conn, $sql)){
        echo "Producto actualizado";
    }else{
        echo "error".$sql;
    }
?>