$(document).ready(function() {
  var change = document.getElementById("change");
  var dt = document.getElementsByClassName("boton");
  //se ingresara un texto donde se indicara la funcionalidad del sistema nota: solo al principio de la pagina

  change.innerHTML = `
    <div class="style-float">
    
      <p>En este software se llevara el seguimiento
      a los aprendices que esten
      citados a comité, y los procesos a seguir por parte
      de los Instructores, Coordinacion y Bienestar</p>
    
      <div class="people">
        <p>JUAN PABLO AGUDELO CASTRO</p>
        <p>DIEGO ALEJANDRO ZULUAGA OSORIO</p>
        <p>SEBASTIAN SERNA VASCO</p>
        <p>FRAY DE JESUS MONTOYA</p>
      </div>
    </div>
  `;

  if (change.clientHeight < 600) {
    change.style.height = "100%";
  } else {
    change.style.height = null;
  }
  console.log(change.clientHeight);

  //se creara un ajax por boton con su respectivo enrutamiento
  for (let i = 0; i < dt.length; i++) {
    dt[i].addEventListener("click", function() {
      fetch("libs/control.php?numero=" + i)
        .then(res => res.text())
        .then(data => (change.innerHTML = data))
        .then(() => {
          $(".ficha").bind("keyup", function() {
            var ficha = $(".ficha").val();
            $.ajax({
              type: "post",
              url: "libs/numeroFicha.php",
              data: { numeroficha: ficha },
              //dataType: "php",
              success: function(respuesta) {
                $(".infoContent").html(respuesta);
              }
            }); //fin del ajax
          }); //fin de bind keyup

          $(".FormularioCompromisos").bind("click", function(e) {
            e.preventDefault();
            var actividad = $("#actividad").val();
            var responsable = $("#responsable").val();
            var fechacompromiso = $("#fecha-compromiso").val();
            $.ajax({
              type: "post",
              url: "libs/listarCompromisos.php",
              data: { actividad: actividad },
              dataType: "php",
              success: function(respuestas) {
                console.log(respuestas);

                $("#listar-compromisos").html(respuestas);
              }
            }); //fin del ajax
          }); //fin de click
        }); //fin them

      if (i == 0) {
        change.style.height = null;
      } else {
        change.style.height = "100%";
      }
    });
  }
});
