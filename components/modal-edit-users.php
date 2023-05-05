<div class="modal fade" id="moda-edit-users" tabindex="-1" aria-labelledby="moda-edit-usersLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white">Actualizar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="form-edit-users">
        <div class="modal-body">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
              <div class="mb-3">
                <label for="idusers" class="form-label">Id Usuario</label>
                <input type="form-control" class="form-control" id="idusers" placeholder="Id Usuario" required autocomplete="off">
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
            <div class="mb-3">
              <label for="users_name" class="form-label">Nombres</label>
              <input type="form-control" class="form-control" id="users_name" placeholder="Nombres" required autocomplete="off">
            </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
            <div class="mb-3">
              <label for="users_lastname" class="form-label">Apellidos</label>
              <input type="form-control" class="form-control" id="users_lastname" placeholder="Apellidos" required autocomplete="off">
            </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
            <div class="mb-3">
              <label for="users_address" class="form-label">Direccion</label>
              <input type="form-control" class="form-control" id="users_address" placeholder="Direccion" required autocomplete="off">
            </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
            <div class="mb-3">
              <label for="users_email" class="form-label">Correo</label>
              <input type="email" class="form-control" id="users_email" placeholder="Correo" required autocomplete="off">
            </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
            <div class="mb-3">
              <select for="users_document_types" class="form-select" required autocomplete="off">
                <option selected>Tipo de documento</option>
                <option value="1">Cédula Ciudadana</option>
                <option value="2">NIT</option>
                <option value="3">Pasaporte Extranjero</option>
              </select>
            </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
            <div class="mb-3">
              <label for="users_document" class="form-label">Identificación</label>
              <input type="form-control" class="form-control" id="users_document" placeholder="Identificacion" required autocomplete="off">
            </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
            <div class="mb-3">
              <label for="users_phone" class="form-label">Número de Telefono</label>
              <input type="form-control" class="form-control" id="users_phone" placeholder="Numero de Telefono" required autocomplete="off">
            </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
            <div class="mb-3">
              <label for="idroles" class="form-label">Id Rol</label>
              <input type="form-control" class="form-control" id="idroles" placeholder="Id Rol" required autocomplete="off">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="idusers">Eliminar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-info">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>