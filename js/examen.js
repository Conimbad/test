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
        var cantidadPreg = cant.cant;
        var id_ex = cant.id;
        var nombre = cant.nombre;
        preguntas += `
          <h1 class="m-2">Inserte las preguntas y respuestas del examen ${nombre}</h1>
          <form id="form-preguntas" class="row g-3 m-5">
            <input id="id_ex" type="hidden" value="${id_ex}">
            <input id="cantidadPreg" type="hidden" value="${cantidadPreg}">
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
      });
      $("#preguntas").html(preguntas);

      //Envío de preguntas y respuestas:
      $("#form-preguntas").submit((e) => {
        let id_ex = $("#id_ex").val();
        let cantidad = $("#cantidadPreg").val();
        //Validación de preguntas:
        //Si la pregunta es solo una:
        if (cantidad == 1) {
          funcion = "guardar1";
          let pregunta1 = $("#pregunta1").val();
          let res11 = $("#respuesta11").val();
          let res12 = $("#respuesta12").val();
          let res13 = $("#respuesta13").val();
          let correcta1 = "";
          if ($("#correcta11").prop("checked") == true) {
            correcta1 = res11;
          }
          if ($("#correcta12").prop("checked") == true) {
            correcta1 = res12;
          }
          if ($("#correcta13").prop("checked") == true) {
            correcta1 = res13;
          }
          $.post(
            "../controlador/ExamenController.php",
            {
              funcion,
              pregunta1,
              res11,
              res12,
              res13,
              correcta1,
              id_ex,
            },
            (response) => {
              console.log(response);
            }
          );
        }
        //Si las preguntas son dos:
        if (cantidad == 2) {
          funcion = "guardar2";
          //Pregunta 1
          let pregunta1 = $("#pregunta1").val();
          let res11 = $("#respuesta11").val();
          let res12 = $("#respuesta12").val();
          let res13 = $("#respuesta13").val();
          let correcta1 = "";
          if ($("#correcta11").prop("checked") == true) {
            correcta1 = res11;
          }
          if ($("#correcta12").prop("checked") == true) {
            correcta1 = res12;
          }
          if ($("#correcta13").prop("checked") == true) {
            correcta1 = res13;
          }
          //Pregunta 2
          let pregunta2 = $("#pregunta2").val();
          let res21 = $("#respuesta21").val();
          let res22 = $("#respuesta22").val();
          let res23 = $("#respuesta23").val();
          let correcta2 = "";
          if ($("#correcta21").prop("checked") == true) {
            correcta2 = res21;
          }
          if ($("#correcta22").prop("checked") == true) {
            correcta2 = res22;
          }
          if ($("#correcta23").prop("checked") == true) {
            correcta2 = res23;
          }
          $.post(
            "../controlador/ExamenController.php",
            {
              funcion,
              pregunta1,
              res11,
              res12,
              res13,
              correcta1,
              pregunta2,
              res21,
              res22,
              res23,
              correcta2,
              id_ex,
            },
            (response) => {
              console.log(response);
            }
          );
        }
        //Si las preguntas son tres:
        if (cantidad == 3) {
          funcion = "guardar3";
          //Pregunta 1
          let pregunta1 = $("#pregunta1").val();
          let res11 = $("#respuesta11").val();
          let res12 = $("#respuesta12").val();
          let res13 = $("#respuesta13").val();
          let correcta1 = "";
          if ($("#correcta11").prop("checked") == true) {
            correcta1 = res11;
          }
          if ($("#correcta12").prop("checked") == true) {
            correcta1 = res12;
          }
          if ($("#correcta13").prop("checked") == true) {
            correcta1 = res13;
          }
          //Pregunta 2
          let pregunta2 = $("#pregunta2").val();
          let res21 = $("#respuesta21").val();
          let res22 = $("#respuesta22").val();
          let res23 = $("#respuesta23").val();
          let correcta2 = "";
          if ($("#correcta21").prop("checked") == true) {
            correcta2 = res21;
          }
          if ($("#correcta22").prop("checked") == true) {
            correcta2 = res22;
          }
          if ($("#correcta23").prop("checked") == true) {
            correcta2 = res23;
          }
          //Pregunta 3
          let pregunta3 = $("#pregunta3").val();
          let res31 = $("#respuesta31").val();
          let res32 = $("#respuesta32").val();
          let res33 = $("#respuesta33").val();
          let correcta3 = "";
          if ($("#correcta31").prop("checked") == true) {
            correcta3 = res31;
          }
          if ($("#correcta32").prop("checked") == true) {
            correcta3 = res32;
          }
          if ($("#correcta33").prop("checked") == true) {
            correcta3 = res33;
          }
          $.post(
            "../controlador/ExamenController.php",
            {
              funcion,
              pregunta1,
              res11,
              res12,
              res13,
              correcta1,
              pregunta2,
              res21,
              res22,
              res23,
              correcta2,
              pregunta3,
              res31,
              res32,
              res33,
              correcta3,
              id_ex,
            },
            (response) => {
              console.log(response);
            }
          );
        }
        //Si las preguntas son cuatro:
        if (cantidad == 4) {
          funcion = "guardar4";
          //Pregunta 1
          let pregunta1 = $("#pregunta1").val();
          let res11 = $("#respuesta11").val();
          let res12 = $("#respuesta12").val();
          let res13 = $("#respuesta13").val();
          let correcta1 = "";
          if ($("#correcta11").prop("checked") == true) {
            correcta1 = res11;
          }
          if ($("#correcta12").prop("checked") == true) {
            correcta1 = res12;
          }
          if ($("#correcta13").prop("checked") == true) {
            correcta1 = res13;
          }
          //Pregunta 2
          let pregunta2 = $("#pregunta2").val();
          let res21 = $("#respuesta21").val();
          let res22 = $("#respuesta22").val();
          let res23 = $("#respuesta23").val();
          let correcta2 = "";
          if ($("#correcta21").prop("checked") == true) {
            correcta2 = res21;
          }
          if ($("#correcta22").prop("checked") == true) {
            correcta2 = res22;
          }
          if ($("#correcta23").prop("checked") == true) {
            correcta2 = res23;
          }
          //Pregunta 3
          let pregunta3 = $("#pregunta3").val();
          let res31 = $("#respuesta31").val();
          let res32 = $("#respuesta32").val();
          let res33 = $("#respuesta33").val();
          let correcta3 = "";
          if ($("#correcta31").prop("checked") == true) {
            correcta3 = res31;
          }
          if ($("#correcta32").prop("checked") == true) {
            correcta3 = res32;
          }
          if ($("#correcta33").prop("checked") == true) {
            correcta3 = res33;
          }
          //Pregunta 4
          let pregunta4 = $("#pregunta4").val();
          let res41 = $("#respuesta41").val();
          let res42 = $("#respuesta42").val();
          let res43 = $("#respuesta43").val();
          let correcta4 = "";
          if ($("#correcta41").prop("checked") == true) {
            correcta4 = res41;
          }
          if ($("#correcta42").prop("checked") == true) {
            correcta4 = res42;
          }
          if ($("#correcta43").prop("checked") == true) {
            correcta4 = res43;
          }
          $.post(
            "../controlador/ExamenController.php",
            {
              funcion,
              pregunta1,
              res11,
              res12,
              res13,
              correcta1,
              pregunta2,
              res21,
              res22,
              res23,
              correcta2,
              pregunta3,
              res31,
              res32,
              res33,
              correcta3,
              pregunta4,
              res41,
              res42,
              res43,
              correcta4,
              id_ex,
            },
            (response) => {
              console.log(response);
            }
          );
        }
        //Si las preguntas son cinco:
        if (cantidad == 5) {
          funcion = "guardar5";
          //Pregunta 1
          let pregunta1 = $("#pregunta1").val();
          let res11 = $("#respuesta11").val();
          let res12 = $("#respuesta12").val();
          let res13 = $("#respuesta13").val();
          let correcta1 = "";
          if ($("#correcta11").prop("checked") == true) {
            correcta1 = res11;
          }
          if ($("#correcta12").prop("checked") == true) {
            correcta1 = res12;
          }
          if ($("#correcta13").prop("checked") == true) {
            correcta1 = res13;
          }
          //Pregunta 2
          let pregunta2 = $("#pregunta2").val();
          let res21 = $("#respuesta21").val();
          let res22 = $("#respuesta22").val();
          let res23 = $("#respuesta23").val();
          let correcta2 = "";
          if ($("#correcta21").prop("checked") == true) {
            correcta2 = res21;
          }
          if ($("#correcta22").prop("checked") == true) {
            correcta2 = res22;
          }
          if ($("#correcta23").prop("checked") == true) {
            correcta2 = res23;
          }
          //Pregunta 3
          let pregunta3 = $("#pregunta3").val();
          let res31 = $("#respuesta31").val();
          let res32 = $("#respuesta32").val();
          let res33 = $("#respuesta33").val();
          let correcta3 = "";
          if ($("#correcta31").prop("checked") == true) {
            correcta3 = res31;
          }
          if ($("#correcta32").prop("checked") == true) {
            correcta3 = res32;
          }
          if ($("#correcta33").prop("checked") == true) {
            correcta3 = res33;
          }
          //Pregunta 4
          let pregunta4 = $("#pregunta4").val();
          let res41 = $("#respuesta41").val();
          let res42 = $("#respuesta42").val();
          let res43 = $("#respuesta43").val();
          let correcta4 = "";
          if ($("#correcta41").prop("checked") == true) {
            correcta4 = res41;
          }
          if ($("#correcta42").prop("checked") == true) {
            correcta4 = res42;
          }
          if ($("#correcta43").prop("checked") == true) {
            correcta4 = res43;
          }
          //Pregunta 5
          let pregunta5 = $("#pregunta5").val();
          let res51 = $("#respuesta51").val();
          let res52 = $("#respuesta52").val();
          let res53 = $("#respuesta53").val();
          let correcta5 = "";
          if ($("#correcta51").prop("checked") == true) {
            correcta5 = res51;
          }
          if ($("#correcta52").prop("checked") == true) {
            correcta5 = res52;
          }
          if ($("#correcta53").prop("checked") == true) {
            correcta5 = res53;
          }
          $.post(
            "../controlador/ExamenController.php",
            {
              funcion,
              pregunta1,
              res11,
              res12,
              res13,
              correcta1,
              pregunta2,
              res21,
              res22,
              res23,
              correcta2,
              pregunta3,
              res31,
              res32,
              res33,
              correcta3,
              pregunta4,
              res41,
              res42,
              res43,
              correcta4,
              pregunta5,
              res51,
              res52,
              res53,
              correcta5,
              id_ex,
            },
            (response) => {
              console.log(response);
            }
          );
        }
        e.preventDefault();
      });
    });
  }
  //Alerta de guardado
  exGuardad();
  function exGuardad() {
    funcion = "pedirLink";
    $.post(
      "../controlador/MostrarExamenController.php",
      { funcion },
      (response) => {
        if (response) {
          let link = response;
          Swal.fire({
            title: "<strong>Examen creado correctamente!</strong>",
            icon: "success",
            html:
              "Puede acceder al examen en este link: <br>" +
              `<b>${link}</b> <br>`,
            showCloseButton: true,
            focusConfirm: false,
            confirmButtonText: '<i class="fa fa-thumbs-up"></i> OK!',
            confirmButtonAriaLabel: "Thumbs up, great!",
          });
        }
      }
    );
  }

  //Abre pagina de examen
  $(document).on("click", ".crear", (e) => {
    setTimeout(function () {
      window.open("examen.php");
    }, 3000);
  });
});
