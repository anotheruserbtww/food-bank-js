<div class="modal fade" id="modal-create-users" tabindex="-1" aria-labelledby="modal-create-usersLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white">Registrar Usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="form-create-users">
        <div class="modal-body">
          <div class="row">
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
                <label for="users_document_types" class="form-label">Tipo documento</label>
                <select id="users_document_types" class="form-select" required autocomplete="off">
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
                <input type="form-control" class="form-control" id="users_document" placeholder="Numero de Identificación" required autocomplete="off">
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
              <div class="mb-3">
                <label for="users_password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="users_password" placeholder="Contraseña" required autocomplete="off">
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
              <div class="mb-3">
                <label for="users_phone" class="form-label">Número de Telefono</label>
                <input type="form-control" class="form-control" id="users_phone" placeholder="Telefono" required autocomplete="off">
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
              <div class="mb-3">
                <label for="idroles" class="form-label">Id Rol</label>
                <input type="form-control" class="form-control" id="idroles" placeholder="Número Rol" required autocomplete="off">
              </div>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-info">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>