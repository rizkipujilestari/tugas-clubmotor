@extends('layout.main')

@section('container-main') 
<div class="p-4">
    <h2 class="mb-4">Gallery Photo</h2>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="height: 600px">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/gallery/photo-1.jpg')}}" width="50%">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/gallery/photo-4.jpg')}}" width="50%">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/gallery/photo-3.jpg')}}" width="50%">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/gallery/photo-2.jpg')}}" width="50%">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection

