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


  
    
   <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Iniciar sesion </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Registrate ahora</button>
  </li>
 
</ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <form method="POST" action="inicioSesion.php">
    <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
     <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
   
    </div>
    <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Contraseña </label>
     <input type="password" name="password" class="form-control" id="exampleInputPassword1"  required>
   </div>
  
    <button type="submit" class="btn btn-primary">Iniciar sesion </button>
   </form>

  </div>

  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"> 
     


  <form method="POST" action="registroCuenta.php">
    <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
     <input type="text" name="nombreUsuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
   
    </div>
    <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Correo electronico </label>
     <input type="email" name="correoElectronico" class="form-control" id="exampleInputPassword1" required>
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Contraseña  </label>
     <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" required>
   </div>
  

   
  
    <button type="submit" class=" btn btn-primary"> Crear cuenta  </button>
   </form>
  
  </div>
 
</div>
   

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