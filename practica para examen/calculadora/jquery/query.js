
$("button").click(function() {
    valor = $(this).val();
    actual = $("#resultado").val();
    if (valor == "C") {
      $("#resultado").val("");
    } else {
      if (valor == "=") {
        $("#resultado").val(eval(actual));
      } else {
        $("#resultado").val(actual + valor);
      }
    }
})
