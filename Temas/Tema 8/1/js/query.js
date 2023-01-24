$(document).ready(function () {
    $("#uno").click(function () {
        $("p").hide(2000);
    });
    $("#dos").dblclick(function () {
        $("#dos").hide();
    });
    $("#tres").mouseenter(function () {
        $(this).css("background-color", "blue");
    });
    $("#tres").mouseleave(function () {
        $(this).css("background-color", "yellow");
    });
    $(window).resize(function () {
        $("#cuatro").css("background-color", "yellow");
    });
    $(window).keypress(function () {
        $("#cinco").css("background-color", "yellow");
    });
});