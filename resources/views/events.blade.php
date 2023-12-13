@extends('layout.main')

@section('container-main') 
<div class="p-4">
    <h2 class="mb-4">Events</h2>
    <div class="card-columns">
        <div class="card">
            <img src="{{asset('img/events/event-dufan.jpg')}}" width="100%">
            <div class="card-body">
                <h5 class="card-title">Open Trip Mio Riders to Dufan</h5>
            </div>
            <div class="card-footer">
                <small class="text-muted">Luring - 02 Juli 2022</small>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('img/events/event-kaka.jpeg')}}" width="100%">
            <div class="card-body">
                <h5 class="card-title">Event Beasiswa Kakak Teladan</h5>
            </div>
            <div class="card-footer">
                <small class="text-muted">Luring - 15 Agustus 2022</small>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('img/events/event-adik.jpeg')}}" width="100%">
            <div class="card-body">
                <h5 class="card-title">Event Beasiswa Adik Teladan Negeri</h5>
            </div>
            <div class="card-footer">
                <small class="text-muted">Luring - 24 November 2022</small>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('img/events/event-pengajian.jpeg')}}" width="100%">
            <div class="card-body">
                <h5 class="card-title">Mio Riders Goes To Kajian Ust. Adi Hidayat @Masjid Trans Studio Bandung</h5>
            </div>
            <div class="card-footer">
                <small class="text-muted">Luring - 05 Juni 2023</small>
            </div>
        </div>
    </div>
</div>
@endsection
