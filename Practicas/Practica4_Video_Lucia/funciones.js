//Reiniciar
function reiniciarVideo() {
    let botonUndo = document.getElementById('botonUndo');
    botonUndo.addEventListener('click', presionarUndo);
}

function presionarUndo() {
    let video = document.getElementById('videoGato');
    video.load();
    video.play();
}

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

//Parar
function pararVideo() {
    let botonStop = document.getElementById('botonStop');
    botonStop.addEventListener('click', presionarStop);
}

function presionarStop() {
    let video = document.getElementById('videoGato');
    video.load();
    video.pause();
}

//Velocidad 1.5
function velocidadVideo1() {
    let botonVel1= document.getElementById('botonVel1');
    botonVel1.addEventListener('click', presionarVelocidad1);
}

function presionarVelocidad1() {
    let video = document.getElementById('videoGato');
    video.playbackRate = 1.5;
    video.play();
}

//Velocidad 2
function velocidadVideo2() {
    let botonVel2= document.getElementById('botonVel2');
    botonVel2.addEventListener('click', presionarVelocidad2);
}

function presionarVelocidad2() {
    let video = document.getElementById('videoGato');
    video.playbackRate = 2;
    video.play();
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

//ResolucionSD
function resolucionVideoSD() {
    let botonResolucionSD= document.getElementById('botonResolucionSD');
    botonResolucionSD.addEventListener('click', presionarResoSD);
}

function presionarResoSD() {
    let video = document.getElementById('videoGato');
    video.src='./videos/gatoComprimido.mp4';
    video.play();
}

//ResolucionHD
function resolucionVideoHD() {
    let botonResolucionHD= document.getElementById('botonResolucionHD');
    botonResolucionHD.addEventListener('click', presionarResoHD);
}

function presionarResoHD() {
    let video = document.getElementById('videoGato');
    video.src="./videos/gatoHD.mp4";
    video.play();
}