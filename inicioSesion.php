<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login en PHP </title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>


   <div class="container  bg-info">
    <br>
    
    <h3 class="text-center">Sistema de inicio de sesion en PHP </h3>

    <br>
   </div>
  
   <br>
   <br>

   <div class="container">

    <?php 
    
    session_start();

    //realizando la conexion a la base de datos 
    $db= mysqli_connect('localhost','root','','login');

    
    $correoElectronico= $_POST['email'];
    $contrasena= $_POST['password'];

    $_SESSION['correoElectronico']=$correoElectronico;

    $query= "SELECT * FROM usuarios WHERE CorreoUsuario='$correoElectronico'  AND Contrasena='$contrasena' ";

    $result= mysqli_query($db, $query);

    

    if(mysqli_num_rows($result) == 1){

        echo "<br>Inicio de sesion exitoso <br> ";
        echo "Usuario :".$_SESSION['correoElectronico'];
        

        header("Location: menu.php");


     
    }else{

      echo "Error no se pudo iniciar sesion con exito ";
    }


    ?>




  
    </div>

    <div class="container">
    <button type="button" class=" btn btn-info"><a href="index.php"> Regresar al menu  </a></button>


    </div>
   
   <br>
   <br>





    <div class=" container bg-info">
        <br>
        <br>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    
</body>
</html>