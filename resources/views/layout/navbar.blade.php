<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economic Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg" href="{{ asset('assets/logo_favicon.svg') }}" sizes="32x32">
</head>
<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md sticky-top bg-white px-md-5">
        <div class="container">
          <img src="{{asset('assets/logo.svg')}}" class="logo-img" alt="Economic space" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link font-24" aria-current="page" href="#">Tutor</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link font-24" aria-current="page" href="#">Event</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link font-24" aria-current="page" href="#">Mentorship</a>
                </li>

            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link font-24" aria-current="page" href="#">Sign Up</a>
                </li>
                <li class="nav-item px-2">
                    <a class="btn btn-dark font-24" aria-current="page" href="#">Login</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>

    @yield('content')


    <!-- FOOTER -->
    <footer class="desktop">
        <div class="container px-md-5 py-md-2">
          <div class="box-white d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <img class="icon-smile" src="{{asset('assets/smile.svg')}}" alt="">
                <div class="box-black ml-2">
                    <h3 class="font-40 text-white font-700">Daftar Kelas</h3>
                </div>
            </div>
            <div class="p-2" style="text-align: right;">
              <h3 class="font-700 font-40">Siap Buat Belajar bersama Economic Space?</h3>
              <p class="font-400 font-28">Langsung Daftarkan diri & Persiapkan Masa Depanmu</p>
            </div>
          </div>
        </div>
        <div class="container-fluid py-2 bg-black mt-5 align-items-center justify-content-center">
          <p class="text-white px-5 mb-1 font-400 font-22"  style="font-style: italic;">Private Enterprise Organization dedicated to Education Technology to support Post-School Life</p>
        </div>
        <div class="container-fluid bg-white py-2 mt-auto d-flex align-items-center justify-content-between">
          <p class="text-black px-5 mb-0 font-700 font-24" >© 2023 Economic Space. All rights reserved.</p>
        <div class="d-flex align-items-center">
            <img class="icon-insta mr-2" src="{{asset('assets/insta.svg')}}" alt="">
            <img class="icon-linkedin" src="{{asset('assets/linkedin.svg')}}" alt="">
        </div>
        </div>
    </footer>

    <footer class="mobile">
        <div class="container px-md-5 py-md-2">
          <div class="box-white d-flex flex-column justify-content-center align-items-center">
            <div class="text-center">
              <h3 class="font-400">Siap Buat Belajar bersama <span class="font-800">Economic Space?</span> </h3>
              <p class="font-400">Langsung Daftarkan diri & Persiapkan Masa Depanmu</p>
            </div>
            <div>
            </div>
            <div class="mt-3">
                <div class="d-flex align-items-center">
                  <img class="icon-smile" src="{{asset('assets/smile.svg')}}" alt=""><div class="box-black font-700 font-40 text-white ml-2">Daftar Kelas</div>
                </div>
              </div>
          </div>
        </div>
        <div>
        <div class="d-flex flex-column align-items-center" style="background: url('assets/footer.svg');background-repeat: no-repeat;background-size: cover;z-index:0px;padding-top:100px;;height:100%">
          <div class=" container-fluid py-2 bg-black mt-2 align-items-center justify-content-center">
            <div class="icon d-flex align-items-center" >
                <img class="icon-insta mr-2" src="{{asset('assets/insta.svg')}}" alt="">
                <img class="icon-linkedin" src="{{asset('assets/linkedin.svg')}}" alt="">
            </div>
                <p class=" text-white px-5 mb-2 text-center font-400" style="font-style: italic; font-size: 0.6em;">Private Enterprise Organization dedicated to Education Technology to support Post-School Life</p>
            </div>
        </div>
        <div class="container-fluid bg-white py-2 align-items-center mb-3">
            <p class="font-700 text-white px-5 mb-0 text-center" style="font-size: 0.6em;">© 2023 Economic Space. All rights reserved.</p>
        </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
