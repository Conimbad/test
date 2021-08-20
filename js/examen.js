$(document).ready(function () {
  var funcion = "";
  $("#form-crear").submit((e) => {
    funcion = "crear";
    let nombre = $("#nombre").val();
    let cantidad = 0;

    if ($("#radio1").prop("checked") == true) {
      cantidad = 1;
    }
    if ($("#radio2").prop("checked") == true) {
      cantidad = 2;
    }
    if ($("#radio3").prop("checked") == true) {
      cantidad = 3;
    }
    if ($("#radio4").prop("checked") == true) {
      cantidad = 4;
    }
    if ($("#radio5").prop("checked") == true) {
      cantidad = 5;
    }

    console.log(nombre);
    console.log(cantidad);
    $.post(
      "../controlador/ExamenController.php",
      { funcion, nombre, cantidad },
      (response) => {
        console.log(response);
        if (response == "creado") {
          $("#creado").hide("slow");
          $("#creado").show(1000).delay(3000);
          $("#creado").hide("slow");
          $("#form-crear").trigger("reset");
          $("#nombre").val("").trigger("change");
          $("#radio").val("").trigger("change");
        } else {
          $("#no-creado").hide("slow");
          $("#no-creado").show(1000).delay(3000);
          $("#no-creado").hide("slow");
          $("#form-crear").trigger("reset");
          $("#nombre").val("").trigger("change");
          $("#radio").val("").trigger("change");
        }
      }
    );
    e.preventDefault();
  });
  crearExamen();

  function crearExamen() {
    funcion = "crearExamen";
    $.post("../controlador/ExamenController.php", { funcion }, (response) => {
      const cantPreg = JSON.parse(response);
      let preguntas = "";
      cantPreg.forEach((cant) => {
        if (cant.id == cantPreg.length + 1) {
          var cantidadPreg = cant.cant;
          console.log(cantidadPreg);
          preguntas += `
            <form id="form-preguntas" class="row g-3 m-5">
          `;
          for (let i = 1; i <= cantidadPreg; i++) {
            preguntas += `
							<div class="mb-3">
								<label for="pregunta" class="form-label">Pregunta ${i}</label>
            		<input id="pregunta${i}" type="text" class="form-control"  placeholder="Pregunta ${i}">
							</div>`;
            for (let j = 1; j <= 3; j++) {
              preguntas += `
                  <div class="row col-3">
                    <label for="inputPassword2" class="">Respuesta ${j}</label>
                    <input id="respuesta${i}${j}" type="text" class="form-control ms-3 "  placeholder="Respuesta ${j}">
                    <div class="form-check ms-3">

                        <label class="form-check-label">
                        <input id="correcta${i}${j}" class="form-check-input" type="checkbox"> Correcta
                        </label>
								    </div>
                  </div>
                `;
            }
          }
          preguntas += `
          <div class=" m-2">
          <button type="submit" class="btn btn-primary mb-3">Guardar examen</button>
          </form>
          </div>
					`;
        }
      });
      $("#preguntas").html(preguntas);
    });
  }
  $(document).on("keyup", "#respuesta33", function () {
    console.log($("#respuesta33").val());
  });
  //Envío de preguntas y respuestas
  $("#form-preguntas").submit((e) => {
    funcion = "guardarExamen";
    let pregunta1 = $("#pregunta1").val();
    let pregunta2 = $("#pregunta2").val();
    let pregunta3 = $("#pregunta3").val();
    let pregunta4 = $("#pregunta4").val();
    let pregunta5 = $("#pregunta5").val();

    //Respuestas
    let correcta1 = "";
    let correcta2 = "";
    let correcta3 = "";
    let correcta4 = "";
    let correcta5 = "";
    if ($("#correcta11").prop("checked") == true) {
      correcta1 = $("#respuesta11").val();
    }
    if ($("#correcta12").prop("checked") == true) {
      correcta1 = $("#respuesta12").val();
    }
    if ($("#correcta13").prop("checked") == true) {
      correcta1 = $("#respuesta13").val();
    }
    if ($("#correcta21").prop("checked") == true) {
      correcta2 = $("#respuesta21").val();
    }
    if ($("#correcta22").prop("checked") == true) {
      correcta2 = $("#respuesta22").val();
    }
    if ($("#correcta23").prop("checked") == true) {
      correcta2 = $("#respuesta23").val();
    }
    if ($("#correcta31").prop("checked") == true) {
      correcta3 = $("#respuesta31").val();
    }
    if ($("#correcta32").prop("checked") == true) {
      correcta3 = $("#respuesta32").val();
    }
    if ($("#correcta33").prop("checked") == true) {
      correcta3 = $("#respuesta33").val();
    }
    if ($("#correcta41").prop("checked") == true) {
      correcta4 = $("#respuesta41").val();
    }
    if ($("#correcta42").prop("checked") == true) {
      correcta4 = $("#respuesta42").val();
    }
    if ($("#correcta43").prop("checked") == true) {
      correcta4 = $("#respuesta43").val();
    }
    if ($("#correcta51").prop("checked") == true) {
      correcta5 = $("#respuesta51").val();
    }
    if ($("#correcta52").prop("checked") == true) {
      correcta5 = $("#respuesta52").val();
    }
    if ($("#correcta53").prop("checked") == true) {
      correcta5 = $("#respuesta53").val();
    }
    //Envío de datos
    $.post(
      "../controlador/ExamenController.php",
      {
        funcion,
        pregunta1,
        pregunta2,
        pregunta3,
        pregunta4,
        pregunta5,
        correcta1,
        correcta2,
        correcta3,
        correcta4,
        correcta5,
      },
      (response) => {
        console.log(response);
      }
    );
  });
  //Abre la pagina del examen
  $(document).on("click", ".crear", (e) => {
    setTimeout(function () {
      window.open("examen.php");
    }, 3000);
  });
});
