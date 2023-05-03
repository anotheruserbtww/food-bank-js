<div class="modal fade" id="moda-edit-users" tabindex="-1" aria-labelledby="moda-edit-usersLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="idusers" class="form-label">Id Usuario</label>
            <input type="form-control" class="form-control" id="idusers" aria-describedby="idusersHelp">
          </div>
          <div class="mb-3">
            <label for="users_name" class="form-label">Nombres</label>
            <input type="form-control" class="form-control" id="users_name" aria-describedby="users_nameHelp">
          </div>
          <div class="mb-3">
            <label for="users_lastname" class="form-label">Apellidos</label>
            <input type="form-control" class="form-control" id="users_lastname" aria-describedby="users_lastnameHelp">
          </div>
          <div class="mb-3">
            <label for="users_address" class="form-label">Direccion</label>
            <input type="form-control" class="form-control" id="users_address" aria-describedby="users_addressHelp">
          </div>
          <div class="mb-3">
            <label for="users_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="users_email" aria-describedby="users_emailHelp">
            <div id="emailHelp" class="form-text">ejemplo@email.com</div>
          </div>
          <div class="mb-3">
            <select for="users_document_types" class="form-select" aria-label="Default select example">
              <option selected>Tipo de documento</option>
              <option value="1">Cédula Ciudadana</option>
              <option value="2">NIT</option>
              <option value="3">Pasaporte Extranjero</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="users_document" class="form-label">Identificación</label>
            <input type="form-control" class="form-control" id="users_document" aria-describedby="users_documentHelp">
          </div>
          <div class="mb-3">
            <label for="users_phone" class="form-label">Número de Telefono</label>
            <input type="form-control" class="form-control" id="users_phone" aria-describedby="users_phoneHelp">
          </div>
          <div class="mb-3">
            <label for="idroles" class="form-label">Id Rol</label>
            <input type="form-control" class="form-control" id="idroles" aria-describedby="idrolesHelp">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="idusers">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>