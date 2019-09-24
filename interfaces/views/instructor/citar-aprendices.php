<div class="style-float">
    <div class="row">
        <div class="col-4">
            <form>
                
                <div class="form-group">
                    <label for="documento">Documento:</label>
                    <input type="text"name="docaprendiz" class="form-control" id="documento" placeholder="Documento">
                </div>

                <div class="form-group">
                    <label for="sugerencia">Sugerencia:</label>
                    <input type="email"name="sujerencia" class="form-control" id="sugerencia" placeholder="Sugerencias">
                </div>

                <div class="form-group">
                    <label for="justificacion">Justificacion:</label>
                    <textarea class="form-control" id="justificacion" rows="3" name="justifi"></textarea>
                </div>

                <div class="form-group">
                    <label for="evidencia">evidencia:</label>
                    <input type="file"name="evidencia" class="form-control-file" id="evidencia">
                </div>

                <button type="submit" class="btn btn-primary btn-block" id="agregar">Agregar</button>
            </form>
        </div>
        <div class="col-8 border-left"">
        <table class="table">
  <thead>
    <tr class="bg-dark text-white text-center">
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Documento</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><button class="btn p-0"><i class="fas fa-trash-alt"></i></button></td>
    </tr>

    
    
  </tbody>
</table>
        </div>
    </div>
</div>