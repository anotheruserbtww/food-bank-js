<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <title>Bank food</title>
  <!--agregamos el cdn de css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <?php include 'navbar-admin.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>PRODUCT_TYPE</h2>
        <button type="button" class="btn btn-info mb-3 " data-bs-toggle="modal" data-bs-target="#modal-create-type-product">
                    <i class="bi bi-plus"></i>
                </button>
          <button type="button  " class="btn btn-secondary  mb-3">
                    <i class="bi bi-arrow-clockwise"></i>
                </button>
        <?php include_once("./components/table-type-product.php"); ?>
      </div>
      


      <div class="col-md-6">
        <h2>PRODUCT</h2>
        <button type="button" class="btn btn-info mb-3 " data-bs-toggle="modal" data-bs-target="#modal-create-product">
                    <i class="bi bi-plus"></i>
                </button>
          <button type="button  " class="btn btn-secondary  mb-3">
                    <i class="bi bi-arrow-clockwise"></i>
                </button>
        <?php include_once("./components/table-product.php"); ?>
      </div>

     

    </div>
  </div>
  <?php include_once("./components/modal-create-product.php"); ?>
  <?php include_once("./components/modal-create-type-product.php"); ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  /*
  $(document).ready(function () {
    // Script para la tabla PRODUCT_TYPE
    $('table-type-product tbody tr').click(function () {
      $('#modal-edit-product').modal('show');
    });

    // Script para la tabla PRODUCT
    $('table-product tbody tr').click(function () {
      $('#modal-edit-type-product').modal('show');
    });
  });
  */
  document.getElementById('form-create-product').addEventListener('submit', (event) => {
            event.preventDefault();
            console.log("submitted")
        });
        </script>

<!-- el cdn de js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>