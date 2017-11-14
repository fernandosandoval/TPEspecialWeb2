$(document).ready(function(){

  $(document).on('click','a.partial', function(e){
    e.preventDefault();

    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function(result){
          $("#partialRenderContainer").html(result);
        }
    });

  });


 });
