<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="bg-navy">
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
                  <a href="#">Sign In</a>
              </li>
              <li>
                  <a href="#">Sign Up</a>
              </li>
            </ul>
          </li>

        </ul>

        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="">

        <div class="container-fluid text-center bg-warning p-2">
          <h3 class="text-navy font-italic font-weight-bolder">MIO RIDERS BANDUNG CITY</h3> 
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
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
            </div>
          </div>
        </nav>

        <div class="container p-2">
            @yield('container-main')
        </div>

      </div>
		</div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>