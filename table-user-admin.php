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
        <div class="my-3">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                <button type="button" class="btn btn-secondary">
                    <i class="bi bi-arrow-clockwise"></i>
                </button>

                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-create-users">
                    <i class="bi bi-plus"></i>
                </button>
            </div>

            <?php include_once("./components/table-users.php"); ?>
        </div>
    </div>

    <?php include_once("./components/modal-create-users.php"); ?>
    <?php include_once("./components/modal-edit-users.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('table tbody tr').click(function() {
                $('#moda-edit-users').modal('show');
            });
        });
    </script>
    <script>
        // const btnEliminar = document.getElementById('idusers');
        // btnEliminar.addEventListener('click', () => {
        //     console.log('Se eliminó el usuario');
        // });

        document.getElementById('form-create-users').addEventListener('submit', (event) => {
            event.preventDefault();
            console.log("submitted")
        });
    </script>
</body>
<html>