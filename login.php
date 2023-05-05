<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
  <title>Bank food - Login</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.104.2" />
  <link rel="stylesheet" href="./assets/css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include_once("./components/navbar-offline.php"); ?>

  <div class="container-fluid">
    <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mx-auto my-5 rounded p-5 shadow">
      <form>
        <!-- <img
						class="mb-4"
						src="/docs/5.2/assets/brand/bootstrap-logo.svg"
						alt=""
						width="72"
						height="57"
					/> -->
        <h1 class="h3 mb-3 fw-normal text-center">Ingreso</h1>

        <div class="mb-3">
          <label for="users_email" class="form-label">Correo</label>

          <input type="email" class="form-control" id="users_email" placeholder="Correo..." required autocomplete="off" />
        </div>

        <div class="mb-3">
          <label for="users_password" class="form-label">Contraseña</label>

          <input type="password" class="form-control" id="users_password" placeholder="Contraseña..." required />
        </div>

        <button type="button" class="w-100 btn btn-bluish-gray btn-lg">
          Ingresar
        </button>

        <p class="mt-5 mb-3 text-muted text-center">© 2023</p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>