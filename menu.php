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


   <?php

    session_start();

    echo "<div class='container'> <h4>    Usuario :".$_SESSION['correoElectronico']." </h4>
    <button type='button' class='btn btn-primary'>  <a href='cerrarSesion.php' style='text-decoration:none; color:white;'> Cerrar sesion   </a> </button>
      </div>";

    


     ?>

  

   

   <div class="container">

    <h4>Bienvenido al sistema web</h4>

    <h5>Aqui encontraras archivos para los que se han registrado en la 
        plataforma 

    </h5>

    
    
    
   
  
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