<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/registro.css">
    <title>Registro de usuario</title>
  </head>
  <body>
    
  <div class="container">
  <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-body p-4 p-sm-5">
          <a class="btn btn-outline-primary" href="./inicio.php" role="button">Regresar</a>
            <h5 class="card-title text-center mb-5 fw-light fs-5">Agregar Usuario</h5>
            <form action="servidor/registro/agregar.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre"
                placeholder="nombre" required autofocus>
                <label for="nombre">Nombre</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="apellido" name="apellido" 
                placeholder="apellido" required>
                <label for="apellido">Apellido Paterno</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="telefono" name="telefono"
                placeholder="telefono" required >
                <label for="telefono">Telefono</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button>
              </div>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>