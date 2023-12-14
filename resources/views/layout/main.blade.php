<!doctype html>
<html lang="en">
  <head>
  	<title>Mio Riders - Club Motor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel='icon' href='{{asset('img/mio-riders-logo-helm-removebg.png')}}' type='image/x-icon' sizes="16x16" />
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="bg-navy" style="margin-top: 50px; padding-top:20px;">
				<h1><a href="" class="logo"><img src="{{ asset('img/mio-riders-logo.png') }}" alt="Mio Riders" width="100%"></a></h1>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="{{ url('/') }}"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
            <a href="{{ url('/articles') }}"><span class="fa fa-copy"></span> Article</a>
          </li>
          <li>
              <a href="{{ url('/events') }}"><span class="fa fa-calendar"></span> Event</a>
          </li>
          <li>
            <a href="{{ url('/gallery') }}"><span class="fa fa-photo"></span> Gallery Photo</a>
          </li>
          <li>
            <a href="{{ url('/clients') }}"><span class="fa fa-user"></span> Klien Kami</a>
          </li>
          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
              <span class="fa fa-sign-in"></span> Login</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                  <a href="{{ url('/sign-in') }}">Sign In</a>
              </li>
              <li>
                  <a href="{{ url('/sign-up') }}">Sign Up</a>
              </li>
            </ul>
          </li>

        </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-warning">
          <div class="container-fluid">            
            
            <button type="button" id="sidebarCollapse" class="btn btn-warning">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-warning d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav mr-auto">
                {{-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li> --}}
                <li>
                    <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/visi-dan-misi') }}">Visi dan Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/products') }}">Produk Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact-us') }}">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                </li>
              </ul>

              
              <div class="offset-2 text-center bg-warning">
                <h4 class="text-navy font-italic font-weight-bolder">MIO RIDERS BANDUNG CITY</h4> 
              </div>
            </div>
          </div>
        </nav>

        <div class="container" style="padding-top: 6rem; padding-bottom: 6rem;">
            @yield('container-main')
        </div>

      </div>
		</div>

    <footer class="bg-navy text-light p-4">
      <div class="container-fluid pt-4">
        <div class="row">
          <div class="col-9">
            <div class="row">
              <div class="col-md-3 text-center">
                  <i class="fa fa-map fa-2x"></i>
                  <p>Jl. Kebon Kangkung 13 No. 10 Kiaracondong, Kota Bandung</p>
              </div>
              <div class="col-md-3 text-center">
                  <i class="fa fa-phone mt-4 fa-2x"></i>
                  <p>+62 813 2228 6797</p>
              </div>
              <div class="col-md-3 text-center">
                  <i class="fa fa-fax mt-4 fa-2x"></i>
                  <p>+62 261 206 009</p>
              </div>
              <div class="col-md-3 text-center">
                  <i class="fa fa-envelope mt-4 fa-2x"></i>
                  <p>mioridersbandung@gmail.com</p>
              </div>
           </div>
           <p class="row">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"> Colorlib.com</a>
          </p>
          </div>
          <div class="col-3">
            <div style="max-width:100%;overflow:hidden;color:red;width:380px;height:200px;">
              <div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Kiaracondong,+Bandung+City,+West+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>