<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Login de usuario</title>
    <script>
    function encriptarFormulario() {
        var formulario = document.getElementById('formulario');
        var inputs = formulario.getElementsByTagName('input');
        
        // Iterar sobre los inputs del formulario
        for (var i = 0; i < inputs.length; i++) {
            var input = inputs[i];
            // Encriptar el valor del input y asignarlo de vuelta
            input.value = btoa(input.value); // En este ejemplo se utiliza Base64 para la encriptación
        }
    }
</script>
  </head>
  <body>
  <div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Login de usuario</h3>

              <!-- Sign In Form -->
              <form id="formulario" name="formulario" action="servidor/login/logear.php" method="POST" onsubmit="encriptarFormulario()">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                  <label for="usuario">Usuario</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  <label for="password">Password</label>
                </div>
                <div class="d-grid">
                  <input class="btn btn-primary" type="submit" Value="Entrar">
                  <div class="text-center">
                    <a class="small" href="registro.php">Registrate aqui!</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  
</html>