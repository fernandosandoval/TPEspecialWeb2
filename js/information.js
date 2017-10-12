$(document).ready(function()
{


});
  $.ajax({
    url:"home.html",
    method:"GET",
    dataType:"html",
    success: function(data){
      $(".blanco").html(data);
    },
    error: function(){
      $(".blanco").html("<h1>Error cargando Home</h1>");
    }
  });

$("#juegos").on("click", function(event)
{
  $.ajax({
    url:"juegos.html",
    method:"GET",
    dataType:"html",
    success: function(data){
      $(".blanco").html(data);
    },
    error: function(){
      $(".blanco").html("<h1>Error cargando Juegos</h1>");
    }
  });
});

$("#home").on("click", function(event)
{
  $.ajax({
    url:"home.html",
    method:"GET",
    dataType:"html",
    success: function(data){
      $(".blanco").html(data);
    },
    error: function(){
      $(".blanco").html("<h1>Error cargando Home</h1>");
    }
  });
});

$("#consolas").on("click", function(event)
{
  $.ajax({
    url:"consolas.html",
    method:"GET",
    dataType:"html",
    success: function(data){
      $(".blanco").html(data);
    },
    error: function(){
      $(".blanco").html("<h1>Error cargando Consolas</h1>");
    }
  });
});
