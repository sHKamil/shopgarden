$(function(){
    $('button.add-to-cart').click(function(){
        const form = $('form.sidebar-filter').serialize();
        let quantity = $('#inputQuantity').val();
        let id = $(this).data('id')
        $.ajax({
            method: "POST",
            url: addToCart+'/'+$(this).data('id'),
            data: {
                quantity,
                id,
                
            },
            // dataType: "json",
        })
        .done(function(response){
            Swal.fire({
                title: 'Koszyk',
                text: 'Dodano produkt do koszyka',
                icon: 'success',
                showCancelButton: true,
                confirmButtonText: 'Przejdź do koszyka',
                cancelButtonText: 'Pozostań na stronie',
            }).then((result)=>{
                if(result.isConfirmed){
                    window.location.replace(addToCart);
                }
            })
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

// $('button.add-cart-button').click(function(event) {
//     event.preventDefault();
//     $.ajax({
//         method: "POST",
//         url: addToCart+$(this) + $(this).data('id')
//     })
//     .done(function () {
//         Swal.fire({
//             title: 'Brawo!',
//             text: 'Produkt dodany do koszyka!',
//             icon: 'success',
//             showCancelButton: true,
//             confirmButtonText: '<i class="fas fa-cart-plus"></i> Przejdź do koszyka',
//             cancelButtonText: '<i class="fas fa-shopping-bag"></i> Kontynuuj zakupy'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 alert('OK');
//             }
//         })
//     })
//     .fail(function () {
//         Swal.fire('Oops...', 'Wystąpił błąd', 'error');
//     });
// });

// $('button.add-cart-button').click(function(event) {
//     event.preventDefault();
//     $.ajax({
//         method: "POST",
//         url: WELCOME_DATA.addToCart + $(this).data('id')
//     })
//     .done(function () {
//         Swal.fire({
//             title: 'Brawo!',
//             text: 'Produkt dodany do koszyka!',
//             icon: 'success',
//             showCancelButton: true,
//             confirmButtonText: '<i class="fas fa-cart-plus"></i> Przejdź do koszyka',
//             cancelButtonText: '<i class="fas fa-shopping-bag"></i> Kontynuuj zakupy'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 alert('OK');
//                 window.location = WELCOME_DATA.listCart;
//             }
//         })
//     })
//     .fail(function () {
//         Swal.fire('Oops...', 'Wystąpił błąd', 'error');
//     });
// });

// function getDisabled() {
//     if (WELCOME_DATA.isGuest) {
//         return ' disabled';
//     }
//     return '';
// }