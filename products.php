<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bank food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./assets/js/users.js"></script>
</body>

</html>