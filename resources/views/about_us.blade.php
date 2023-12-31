@extends('layout.main')

@section('container-main')
    <div class="p-4">
        <h2 class="mb-4">About Us</h2>
        <div class="row">
          <div class="col-8">
            Kami adalah klub Motor yang menjunjung tinggi nilai persaudaraan sebagai jalan hidup, tanpa membedakan suku, ras, agama 
            dan bangsa dengan tujuan utama untuk kemanusiaan. Berawal dari sekumpulan manusia yang mencintai dan menggunakan
            motor Yamaha Mio sehingga menjadi ciri khas klub Motor ini. Didirikan di Bandung pada 1 Juni 2020.
          </div>
          <div class="col-4">
            <img src="{{asset('img/mio-riders-logo.png')}}" alt="Mio Riders" width="100%" style="border-radius: 10px">
          </div>
        </div>
    </div>
    <div class="p-4">
        <h2 class="mb-4">Hukum Persaudaraan</h2>
        <div class="card-deck text-center">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">LOYAL</h5>
                <p class="card-text">Setia terhadap Mio Riders</p>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">RESPECT</h5>
                <p class="card-text">Saling Menghormati sesama anggota Mio Riders</p>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">HONOUR</h5>
                <p class="card-text">Menjaga nama baik dan kehormatan Mio Riders</p>
              </div>
            </div>
          </div>
    </div>
@endsection

