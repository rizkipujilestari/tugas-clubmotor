@extends('layout.main')

@section('container-main')
    <div class="p-4">
        <h2 class="mb-4">Products</h2>
        <div class="card-group">
            <div class="card">
              <img class="card-img-top" src="{{asset('img/products/kaos-mio-riders.png')}}" alt="Kaos Mio Riders" width="250px">
              <div class="card-body">
                <h5 class="card-title">Kaos Mio Riders Bandung City</h5>
                <p class="card-text">Rp. 200.000,-</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary">Beli</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{asset('img/products/topi-mio-riders.png')}}" alt="Topi Mio Riders" width="250px">
              <div class="card-body">
                <h5 class="card-title">Topi Mio Riders Bandung City</h5>
                <p class="card-text">Rp. 120.000,-</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary">Beli</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{asset('img/products/jacket-mio-riders.png')}}" alt="Jacket Mio Riders" width="250px">
              <div class="card-body">
                <h5 class="card-title">Jacket Mio Riders Bandung City</h5>
                <p class="card-text">Rp. 310.000,-</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary">Beli</button>
              </div>
            </div>
          </div>
    </div>
@endsection

