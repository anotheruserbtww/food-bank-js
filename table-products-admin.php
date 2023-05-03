<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <title>Bank food</title>
  <!--agregamos el cdn de css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <!-- el cdn de js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php include 'navbar-admin.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>PRODUCT_TYPE</h2>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProductTypeModal">Agregar
          item</button>
        <button class="btn btn-primary mb-3" onclick="location.reload()">Actualizar</button>
        <table class="table table-bordered table-hover product-type-table">
          <thead>
            <tr>
              <th scope="col">idproduct_type</th>
              <th scope="col">product_type</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Frutas</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Enlatados</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Secos</td>
            </tr>
          </tbody>
          <!-- Modal para agregar producto tipo -->
          <div class="modal fade" id="addProductTypeModal" tabindex="-1" aria-labelledby="addProductTypeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="addProductTypeModalLabel">Agregar nuevo tipo de producto</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="productTypeName" class="col-form-label">Nombre del tipo de producto:</label>
                      <input type="text" class="form-control" id="productTypeName">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Agregar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal para editar producto tipo -->
          <div class="modal fade" id="editar-tipo" tabindex="-1" aria-labelledby="addProductTypeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="addProductTypeModalLabel">Editar tipo de producto</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="productTypeName" class="col-form-label">Nombre del tipo de producto:</label>
                      <input type="text" class="form-control" id="productTypeName">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger">Eliminar</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Actualizar</button>
                </div>
              </div>
            </div>
          </div>
          
        </table>
      </div>


      <div class="col-md-6">
        <h2>PRODUCT</h2>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#agregar-producto">Agregar
          item</button>

        <button class="btn btn-primary mb-3" onclick="location.reload()">Actualizar</button>
        <table class="table table-bordered  table-hover product-table ">
          <thead>
            <tr>
              <th scope="col">Idproducts</th>
              <th scope="col">product_type_name</th>
              <th scope="col">Idproduct_type</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>110</td>
              <td>Manzanas</td>
              <td>1</td>
            </tr>
            <tr>
              <td>120</td>
              <td>Atún</td>
              <td>2</td>
            </tr>
            <tr>
              <td>130</td>
              <td>Almendras</td>
              <td>3</td>
            </tr>
          </tbody>
          <!-- Modal para agregar producto -->
          <div class="modal fade" id="agregar-producto" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Aquí va el formulario para agregar el producto -->
                  <form>
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="mb-3">
                      <label for="tipo" class="form-label">Tipo</label>
                      <select class="form-select" id="tipo">
                        <option selected>Selecciona un tipo...</option>
                        <option value="Frutas">Frutas</option>
                        <option value="Enlatados">Enlatados</option>
                        <option value="Secos">Secos</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="cantidad" class="form-label">Cantidad</label>
                      <input type="number" class="form-control" id="cantidad">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </div>
          </div>
           <!-- Modal para editar -->
           <div class="modal fade" id="agregar-productoedit" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
                  <form>
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="mb-3">
                      <label for="tipo" class="form-label">Tipo</label>
                      <select class="form-select" id="tipo">
                        <option selected>Selecciona un tipo...</option>
                        <option value="Frutas">Frutas</option>
                        <option value="Enlatados">Enlatados</option>
                        <option value="Secos">Secos</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="cantidad" class="form-label">Cantidad</label>
                      <input type="number" class="form-control" id="cantidad">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger">Eliminar</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Actualizar</button>

                </div>
              </div>
            </div>
          </div>
        </table>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script>
        $(document).ready(function () {
          // Script para la tabla PRODUCT_TYPE
          $('.product-type-table tbody tr').click(function () {
            $('#editar-tipo').modal('show');
          });

          // Script para la tabla PRODUCT
          $('.product-table tbody tr').click(function () {
            $('#agregar-productoedit').modal('show');
          });
        });
      </script>

    </div>
  </div>
</body>

</html>