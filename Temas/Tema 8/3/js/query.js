$(document).ready(function(){
    $('#balon').click(function () {
      $(this).css("background-color", "red");
      $(this).animate({top: '10%'}, function(){
        $('#balon').css("background-color", "green");
      });
    })
  });