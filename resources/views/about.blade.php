@extends('layouts.app')

@section('content')

  <div style="background-color: rgb(192, 192, 192);">
    <div class="container py-5">
      <div class="row h-100 align-items-center py-5">
        <div class="col-lg-6">
          <h1 class="display-4">O nas</h1>
          <p class="lead text-white mb-0">ShopGarden to sklep internetowy ale także i tradycyjny sklep stacjonarny, u nas możesz robić zakupy z dostawą lub z odbiorem osobistym w sklepie</p>
          <p class="lead text-muted">Gwarandujemy zawsze 100% zgodności produktów z opisem.</p>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
          <img src="img/shopping.svg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  
  <div class="py-5">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="img/package.svg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">Dostawa i zwrot</h2>
          <p class="font-italic text-muted mb-4">Każda nasza przesyłka jest starannie pakowana oraz ubezpieczona w firmie przewozowej. 
            Wszystkie zamówienie realizowane są do 24h od zapłaty. Zwrot produktu bez przyczyny jest możliwy do 14 dni od otrzymania 
            zamówienia oraz przez cały okres gwarancji w przypadku uszkodzeń, które zostały uwzględnione w gwarancji.</p>
          <p class="lead text-muted">Gwarandujemy dostawę na czas.</p>
        </div>
      </div>
    </div>
  </div>
@endsection
