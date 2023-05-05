<div class="modal fade" id="modal-create-product" tabindex="-1" aria-labelledby="modal-create-productLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-info">
                  <h5 class="modal-title  text-white" id="exampleModalLabel">AGREGAR PRODUCTO</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="form-create-product">
                   
                  <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="nombre"required autocomplete="off">
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
                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-info">Guardar</button>
                </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>