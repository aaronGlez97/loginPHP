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
  
  //conectandome a la base de datos
  session_start(); 
  $db= mysqli_connect('localhost','root','','login');

  $nombreUsuario= $_POST['nombreUsuario'];
  $correoElectronico= $_POST['correoElectronico'];
  $contrasena= $_POST['contrasena'];

  $query= "INSERT INTO usuarios(NombreUsuario, CorreoUsuario, Contrasena) VALUES ('$nombreUsuario','$correoElectronico','$contrasena')";

  if(mysqli_query($db, $query)){
    echo "Registro de usuarios insertado con exito ";
  }else {

    echo "Error no se pudo realizar el registro del usuario con exito";
  }





   ?>

 
   
  
    
  </div>
   
   <div class="container">
   <button type="button" class=" btn btn-info"> <a href="index.php"> Regresar al menu  </a></button>



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