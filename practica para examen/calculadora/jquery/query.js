
$("button").click(function() {
    //variable valor del boton pulsado
    let valor = $(this).val();
    //variable valor de la pantalla
    let actual = $("#resultado").val();
    //Si se pulsa C reseteamos la pantalla
    if (valor == "C") {
      $("#resultado").val("");
    //Si pulsamos = nos muestra el resultado de la operación
    } else if (valor == "=") {
        //eval() evalúa o ejecuta un argumento.
        $("#resultado").val(eval(actual));
    } else {
        //Si no pulsamos ninguno de los dos botones anteriores simplemente se mostrara los botone que hemos pulsado
        $("#resultado").val(actual + valor);
        
    }
})
