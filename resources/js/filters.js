$(function(){
    $('a#filter-submit').click(function(){
        const form = $('form.sidebar-filter').serialize();
         $.ajax({
                method: "GET",
                url:"/",
                data: form
              })
              .done(function(response){
                window.location.reload();
              })
              .fail(function(response){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Coś poszło nie tak',
                  })
              });
    })
    
});