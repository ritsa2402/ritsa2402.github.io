<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/custom.css">
	<script src="./js/custom.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <?php
            $host="localhost";
            $bd= "login";
            $user= "root";
            $pass= "";
            $conn= mysqli_connect($host, $user, $pass, $bd);

            $query=mysqli_query($conn, "SELECT * FROM coment");
        ?>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table class="table-bordered" id="table">
                <tr class="tabla">
                    <td>Id</td>
                    <td>Titulo</td>
                    <td>Comentario</td>
                </tr>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                <tr class="tablaa">
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['titulo'];?></td>
                    <td><?php echo $row['comentario'];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>Para eliminar datos de la tabla</h3>
                <form method="post" action="/examenfinal/php/eliminar.php" class="formEli">
                    <label for="id">Id</label>
                    <input class="inputid" type="number" name="id" placeholder="Ingresar"/>

                    <input type="submit" class="eliminar" name="eliminar" placeholder="Eliminar"/>   
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h3>Para actualizar datos de la tabla</h3>
                
                <form method="post" action="/examenfinal/php/actualizar.php" class="formAct" enctype="multipart/form-data">
                    
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul>
                            <li><label for="id">Id </label></li>
                            <li><label for="titulo">Titulo </label></li>
                            <li><label for="comentario">Comentario </label></li>
                            
                        </ul>
                    </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="actuali">
                            <li><input class="inputid" type="number" name="id" placeholder="Ingresar"/></li>
                            <li><input type="text" name="titulo" placeholder="Ingresar"/></li>
                            <li><input type="text" name="comentario" placeholder="Ingresar"/></li>
                        </ul>
                </div>
                

                    <input type="submit" class="actualizar" name="actualizar" placeholder="Actualizar"/>   
                </form>
            </div>
        </div>
    </section>
</body>
</html>