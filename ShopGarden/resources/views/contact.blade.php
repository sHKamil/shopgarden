@extends('layouts.app')

@section('content')

  <div class="py-5">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="img/envelope.svg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">Kontakt</h2>
            <form>
                <ul class="list-group list-group-flush">
                    <li class="list-unstyled form-floating mb-3">
                        <input class="form-control rounded-pill" type="text" name="name" placeholder="Imię">
                        <label style="left: unset;" for="name">Imię</label>
                    </li>
                    <li class="list-unstyled form-floating mb-3">
                        <input class="form-control rounded-pill" type="text" name="email" placeholder="E-mail">
                        <label style="left: unset;" for="email">E-mail</label>
                    </li>
                    <li class="list-unstyled form-floating mb-3">
                        <textarea class="form-control rounded-3" name="message" placeholder="Wiadomość" id="message" style="height: 100px"></textarea>
                        <label style="left: unset;" for="message">Wiadomość</label>
                    </li>
                    <li class="list-unstyled">
                        <input class="btn btn-success w-100 rounded-pill" type="submit" value="Wyślij">
                    </li>
                </ul>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection
