@extends('layout.main')

@section('container-main')
<div class="p-3">
    <h2 class="mb-4">Kontak Kami</h2>
     <!--Grid column-->
     <div class="row">
        <div class="col-md-3 text-center">
            <i class="fa fa-map fa-2x"></i>
            <p>Alamat : Jl. Kebon Kangkung 13 No. 10 Kiaracondong, Kota Bandung</p>
        </div>
        <div class="col-md-3 text-center">
            <i class="fa fa-phone mt-4 fa-2x"></i>
            <p>Telepon : +62 813 2228 6797</p>
        </div>
        <div class="col-md-3 text-center">
            <i class="fa fa-fax mt-4 fa-2x"></i>
            <p>Fax : +62 261 206 009</p>
        </div>
        <div class="col-md-3 text-center">
            <i class="fa fa-envelope mt-4 fa-2x"></i>
            <p>Email : mioridersbandung@gmail.com</p>
        </div>
     </div>
    <!--Grid column-->

    <hr>

    <h2>Kirim Pesan</h2>
    <div class="col-12 p-2">
        @if (\Session::has('success'))
            <div class="alert alert-success" id="alert">
                {!! \Session::get('success') !!} 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger" id="alert">
                {{$errors->first()}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

    <form id="contact-form" name="contact-form" action="{{ url('/sendWa') }}" method="POST">
        {{ csrf_field() }}
        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-2">
                    <label for="name" class="">Your name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-2">
                    <label for="email" class="">Your email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-2">
                    <label for="subject" class="">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                </div>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
                <div class="md-form mb-3">
                    <label for="message">Your message</label>
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                </div>

            </div>
        </div>
        <!--Grid row-->

        <div class="text-center text-md-right">
            <button class="btn btn-primary">Send</button>
        </div>

    </form>
</div>
@endsection

