
$("button").click(function() {
    //variable valor del boton pulsado
    let valor = $(this).val();
    //variable valor de la pantalla
    let actual = $("#resultado").val();
    //Si se pulsa C reseteamos la pantalla
    if (valor == "C") {
      $("#resultado").val("");
    } else {
      if (valor == "=") {
        $("#resultado").val(eval(valor));
      } else {
        $("#resultado").val(actual + valor);
      }
    }
})
