<?php include "./partes/header.php";?>
<?php include_once "./partes/nav.php";?>    
    <!-- Modal-->
    <div class="modal fade" id="modal-crear-examen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detalles de examen</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- ALERT EXAMEN AGREGADO-->
            <div id="creado" style="display: none;" class="alert alert-success text-center">
              <span><i class="fas fa-check m-1"></i>Examen creado correctamente</span>
            </div>
            <div id="no-creado" style="display: none;" class="alert alert-danger text-center">
              <span><i class="fas fa-times m-1"></i>El examen no pudo</span>
            </div>
        <div class="modal-body">
            <form id="form-crear">
                <div class="form-group">
                    <label for="nombre">Nombre de Examen</label>
                    <input id="nombre" type="text" class="form-control" placeholder="Ingrese nombre de examen" required>
                </div>
                
                <div class="form-group">
                    <label for="preguntas">Elija el número de preguntas</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="cantidad" id="radio1" value=1>
                        <label for="flex-radio1" class="form-check-label">1</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="cantidad" id="radio2" value=2>
                        <label for="flex-radio2" class="form-check-label">2</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="cantidad" id="radio3" value=3>
                        <label for="flex-radio3" class="form-check-label">3</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="cantidad" id="radio4" value=4>
                        <label for="flex-radio4" class="form-check-label">4</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="cantidad" id="radio5" value=5>
                        <label for="flex-radio5" class="form-check-label">5</label>
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="submit" class=" crear btn btn-primary">Crear Examen</button>
                </form>
                </div>
        </div>
        
        </div>
    </div>
    </div>
    <!-- Boton crear examen-->
    <div class="continer-md m-2 mt-2 ">
        <div class="row justify-content-start">
            
            <div class="col">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-crear-examen">Crear Nuevo Examen</button>
            </div>
        </div>
    </div>
    
<?php include_once "./partes/footer.php";?>