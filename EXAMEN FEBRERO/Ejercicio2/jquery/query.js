$(document).ready(function () {
    $('#menu').click(function () { 
        $('#submenu').slideToggle("slow");
    });

    $('img').mouseleave(function () { 
        $('p').fadeIn();
    });

    $('img').mouseenter(function () { 
        $('p').fadeOut();
    });

    $('#guardarFormulario').click(function(evento){
        evento.preventDefault();
        alert(`Bienvenido/a ${$('#idNombre').val()} ${$('#idApellido').val()} tus estudios actuales son: ${$('#idEstudios').val()}.`)
    })

    // $('#icono').on({        
    //     mouseenter: function() { $(this).attr('class', 'bi bi-person'); },
    //     mouseleave: function() { $(this).attr('src', 'bi bi-person-fill'); }
    // });
});



// Funciones de video
//Play
function iniciarVideo() {
    let botonPlay = document.getElementById('botonPlay');
    botonPlay.addEventListener('click', presionarPlay);
}

function presionarPlay() {
    let video = document.getElementById('videoGato');
    video.playbackRate = 1.0;
    video.play();
}

//Pausar
function pausarVideo() {
    let botonPause = document.getElementById('botonPause');
    botonPause.addEventListener('click', presionarPause);
}

function presionarPause() {
    let video = document.getElementById('videoGato');
    video.pause();
}

//Silenciar
function silenciarVideo() {
    let botonSilenciar= document.getElementById('botonSilenciar');
    botonSilenciar.addEventListener('click', presionarSilenciar);
}

function presionarSilenciar() {
    let video = document.getElementById('videoGato');
    video.muted = true;
}

//Sonido
function sonidoVideo() {
    let botonSonido= document.getElementById('botonSonido');
    botonSonido.addEventListener('click', presionarSonido);
}

function presionarSonido() {
    let video = document.getElementById('videoGato');
    video.muted = false;
}