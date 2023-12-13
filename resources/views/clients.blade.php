@extends('layout.main')

@section('container-main')
<div class="p-4">
    <h2 class="mb-4">Daftar Klien</h2>
    <p>Partnership Client</p>

    <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="{{asset('img/clients/Yamaha-Logo.png')}}" width="250px">
        </div>
        <div class="card">
          <img class="card-img-top" src="{{asset('img/clients/mio-logo.png')}}" width="250px">
        </div>
        <div class="card">
          <img class="card-img-top" src="{{asset('img/clients/gojek-logo.png')}}" width="250px">
        </div>
        <div class="card">
          <img class="card-img-top" src="{{asset('img/clients/tokopedia-logo.png')}}" width="250px">
        </div>
      </div>
    
</div>
@endsection
