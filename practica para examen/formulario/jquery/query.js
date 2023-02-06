$(document).ready(function () {
    $('button').click(function(evento){
        evento.preventDefault();
        alert(`Bienvenido ${$('#idNombre').val()} ${$('#idApellido').val()}. 
Se te ha generado un nuevo correo electronico con la dirección ${$('#idNombre').val()} ${$('#idApellido').val()}1@diw.com`)
    })
})