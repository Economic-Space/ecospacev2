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

      {{-- icon --}}
      <script src="https://kit.fontawesome.com/9d67704b2b.js" crossorigin="anonymous"></script>
      {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
              <a class="nav-link active font-24" aria-current="page" href="#">Tutor</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link active font-24" aria-current="page" href="#">Event</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link active font-24" aria-current="page" href="#">Mentorship</a>
            </li>

          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item px-2">
                  <a class="nav-link active font-24" aria-current="page" href="#">Sign Up</a>
              </li>
              <li class="nav-item px-2">
                  <a class="btn btn-dark font-24" aria-current="page" href="#">Login</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR-->

    <section>
      @yield('content')
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>

