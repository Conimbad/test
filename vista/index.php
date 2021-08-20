<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema de Examenes</a>
    </div>
    </nav>
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
    
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/examen.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>