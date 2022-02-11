    $(function() {
      $('.delete').click(function(){
        var url;
        if($(this).hasClass('promo')){
          var url = "items/promo/" 
        }else if($(this).hasClass('prod')){
          var url = "items/" 
        }
        console.log(url);
        Swal.fire({
            title: 'Napewno chcesz usunąć ten rekord?',
            text: "Nie biędzie się dało go już odzyskać!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Nie',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tak, usuń!'
          }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    position: 'mid',
                    icon: 'success',
                    title: 'Rekord został usunięty',
                    showConfirmButton: false,
                  })
              $.ajax({
                method: "DELETE",
                url: url + $(this).data("id"),
              //   {{-- W przyszłości zmienić na stały adres --}}
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
            }
          })
      }); 
    });