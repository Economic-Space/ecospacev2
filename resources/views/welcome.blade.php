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

    <!-- HEADER -->
    <header class="container-fluid bg-img-orange px-md-5 py-md-5">
      <div class="container">
        <div class="row px-md-5">
          <div class="col-12">
            <h1 class=" text-white font-64 font-light mt-5">Persiapkan Dirimu<br>menjadi <span class="font-black stroke-underline">Idaman Recruiters</span></h1>
          </div>
        </div>
        <div class="row px-md-5 mt-4">
          <div class="col-12">
            <p class="text-white font-30 font-light">Mendukung pengembangan kemampuan spesifik, dengan tetap<br>
              Memperluas Wawasan & Kapabilitas dalam berbagai area lain
            </p>
          </div>
        </div>

        <div class="row px-md-5 mt-4">
          <div class="col-12">
            <button type="button" class="btn btn-dark font-32 font-bold p-2 px-4 rounded-4">Register Now</button>
          </div>
        </div>
      </div>

    </header>

    <!-- SERVICE PART -->

    <div class="container-fluid px-md-5 py-md-5 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center font-60 font-black"><b>Belajar - Eksplorasi - <span class="text-orange">Raih Impianmu</span></b></h2>
            <p class="text-center font-32">Satu Platform untuk Semua Kebutuhan Pengembangan Dirimu</p>
          </div>
        </div>

        <div class="desktop py-md-3 px-md-5">
          <div class="row gx-5">
            <div class="col-4">
              <div class="equal-height">
                <div class="bg-orange rounded-5 text-center service-title mx-auto py-2 half-down">
                  <h4 class="font-32 font-bold">Academic Chamber</h4>
                </div>
                <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3 equal-height">
                  <img src="{{asset('assets/face1.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                  <h3 class="font-36 text-orange"><b>TUTOR SERVICE</b></h3>
                  <p class="font-24">Perkuliahan jadi mudah bersama Expert yang <span class="font-semibold">membantu pembelajaran akademik</span> kalian</p>
                </div>
                <div class="bg-orange rounded-5 service-title d-flex flex-row mx-auto py-2 px-1 aligns-items-center justify-content-center gap-3 half-up">
                  <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid">
                  <p class="font-24">Minimal IPK 4 :) Ingin Belajar Lebih Dalam</p>
                </div>
              </div>

            </div>
            <div class="col-4">
              <div  class="equal-height">
                <div class="bg-black rounded-5 text-center service-title mx-auto py-2 half-down">
                  <h4 class="font-32 font-bold text-white">Event Space</h4>
                </div>
                <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3 equal-height">
                  <img src="{{asset('assets/face2.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                  <h3 class="font-36 text-black"><b>BOOTCAMP</b></h3>
                  <p class="font-24">Belajar Ilmu Spesifik & Mendalam untuk <span class="font-semibold">pengembangan skill beyond kehidupan akademik</span></p>
                </div>
                <div class="bg-black rounded-5 service-title d-flex flex-row mx-auto py-2 px-1 aligns-items-center justify-content-center gap-3 half-up">
                  <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid">
                  <p class="font-24 text-white">Never say never untuk Pembelajaran Baru</p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div  class="equal-height">
                <div class="bg-blue rounded-5 text-center service-title mx-auto py-2 half-down">
                  <h4 class="font-32 font-bold">Mentorship Hub</h4>
                </div>
                <div class="border border-3 border-black rounded-5 text-center box-service mx-auto equal-height">
                  <img src="{{asset('assets/face3.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                  <h3 class="font-36 text-blue"><b>MENTORING</b></h3>
                  <p class="font-24">Keterbatasan akses bukan menjadi tantangan lagi, tetapi kesempatan buat <span class="font-semibold">belajar sama orang dalam</span></p>
                </div>
                <div class="bg-blue rounded-5 service-title d-flex flex-row mx-auto py-2 px-1 aligns-items-center justify-content-center gap-3 half-up">
                  <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid">
                  <p class="font-24">Dapatkan Akses 1-on-1 sama Ahlinya</p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- MOBILE VERSION -->
        <div class="mobile">
          <div class="row g-0">
            <div id="carouselService" class="carousel slide mobile" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                  <div class="card-container">
                    <div class="card-title bg-orange">
                      <h4>Academic Chamber</h4>
                    </div>
                    <div class="border border-2 border-black rounded-5 text-center">
                      <img src="{{asset('assets/face1.svg')}}" alt="face icon" class="mx-auto d-block img-fluid">
                      <h3><b>TUTOR SERVICE</b></h3>
                      <p>Perkuliahan jadi mudah bersama Expert yang membantu pembelajaran akademik kalian</p>
                    </div>
                    <div class="bg-orange">
                      <p>Minimal IPK 4 :) Ingin Belajar Lebih Dalam</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="card-container">
                    <div class="card-title bg-black">
                      <h4>Event Space</h4>
                    </div>
                    <div class="border border-2 border-black rounded-5 text-center">
                      <img src="{{asset('assets/face2.svg')}}" alt="face icon" class="mx-auto d-block">
                      <h3><b>BOOTCAMP</b></h3>
                      <p>Belajar Ilmu Spesifik & Mendalam untuk pengembangan skill beyond kehidupan akademik</p>
                    </div>
                    <div class="bg-black">
                      <p>Never say never untuk Pembelajaran Baru</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="card-container">
                    <div class="card-title bg-blue">
                      <h4>Mentorship Hub</h4>
                    </div>
                    <div class="border border-2 border-black rounded-5 text-center">
                      <img src="{{asset('assets/face3.svg')}}" alt="face icon" class="mx-auto d-block">
                      <h3><b>MENTORING</b></h3>
                      <p>Keterbatasan akses bukan menjadi tantangan lagi, tetapi kesempatan buat belajar sama orang dalam</p>
                    </div>
                    <div class="bg-blue">
                      <p>Dapatkan Akses 1-on-1 sama Ahlinya</p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselService" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselService" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MENTOR PART -->
    <div class="container-fluid bg-black parent">
      <div class="container">
        <div class="row">
          <div class="col-md-4 d-flex justify-content-center flex-column">
            <div>
                <div class="ms-md-5">
                    <h3 class="font-36 text-white font-bold">TEMUKAN TUTOR KULIAH & MENTOR KARIRMU</h3>
                    <p class="text-white font-20">Mengundang Talent Terbaik untuk membantu kalian menghadapi Akademik & Karirmu</p>
                </div>
                <div class="bg-blue d-flex flex-row ms-md-5 rounded-5 gap-3 mb-3 align-items-center">
                    <div class="ms-4"><h3 class="text-white font-44 font-bold">1.</h3></div>
                    <div><p class="font-20">Persiapan bersama <span class="font-semibold">Ahlinya pada Mata Kuliah</span> yang dipilih</p></div>
                </div>
                <div class="bg-orange d-flex flex-row ms-md-5 rounded-5 gap-3 align-items-center">
                    <div class="ms-4"><h3 class="text-white font-44 font-bold">2.</h3></div>
                    <div><p class="font-20">Memulai perjalanan <span class="font-semibold">lomba, beasiswa, karir</span> dengan Mentor</p></div>
                </div>
            </div>

          </div>
          <div class="col-md-8">
            <div class="desktop">
                <div class="row">
                  <div class="col-4">
                    <div class="bg-blue rounded-3 bigger d-flex flex-column justify-content-end">
                      <h5 class="font-bold text-center">Joshua Soebroto</h5>
                      <p class="text-center">Non Permanent at EY (Junior Auditor)</p>
                      <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="bg-blue rounded-3 bigger d-flex flex-column justify-content-end">
                      <h5 class="font-bold text-center">Joshua Soebroto</h5>
                      <p class="text-center">Non Permanent at EY (Junior Auditor)</p>
                      <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="bg-blue rounded-3 bigger d-flex flex-column justify-content-end">
                      <h5 class="font-bold text-center">Joshua Soebroto</h5>
                      <p class="text-center">Non Permanent at EY (Junior Auditor)</p>
                      <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                    </div>
                  </div>
                </div>
            </div>

            <div class="mobile">
              <div id="carouselMentor" class="carousel slide mobile" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2000">
                    <div>
                      <h5>Joshua Soebroto R</h5>
                      <p>Non Permanent at EY (Junior Auditor)</p>
                      <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div>
                      <h5>Joshua Soebroto</h5>
                      <p>Non Permanent at EY (Junior Auditor)</p>
                      <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div>
                      <h5>Joshua Soebroto</h5>
                      <p>Non Permanent at EY (Junior Auditor)</p>
                      <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMentor" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMentor" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- POTENTIAL  -->
    <div class="container-fluid px-md-5 pt-md-5 mt-5 mb-5">
      <div class="container px-md-5">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center font-60 font-light">Learn Now & Claim Your Title:</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="bg-black mx-auto p-2" style="width: fit-content">
              <h1 class="text-center font-64 font-black text-white">#Talent-Favorit-Top Company HR</h1>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="text-center font-32">Kembangkan Potensimu sejak dini bersama Economic Space</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-3">
            <div class="half-down">
              <img src="{{asset('assets/emoji1.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
            </div>
            <div class="bg-red border border-3 border-black rounded-5 box-potential">
              <h4 class="text-center font-32 font-bold text-white">Easy Access & <br>Widely Available</h4>
              <p class="text-center font-20 text-white">Tidak ada lagi kata “Sulit” bagi Pelajar untuk mendapatkan akses belajar</p>
            </div>

          </div>
          <div class="col-6 col-md-3">
            <div class="half-down">
              <img src="{{asset('assets/emoji2.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
            </div>
            <div class="bg-blue border border-3 border-black rounded-5 box-potential">
              <h4 class="text-center font-32 font-bold">One Stop Solution <br>for Students</h4>
              <p class="text-center font-20">Tersedia secara lengkap dari pembelajaran akademik, skill penting, lomba, hingga karir</p>
            </div>

          </div>
          <div class="col-6 col-md-3">
            <div class="half-down">
              <img src="{{asset('assets/emoji3.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
            </div>
            <div class="bg-black border border-3 border-black rounded-5 box-potential">
              <h4 class="text-center font-32 font-bold text-white">Your High Quality <br>Learning Partner</h4>
              <p class="text-center font-20 text-white">Mengundang & bekerja sama dengan Tutor, Mentor, & Pembicara terbaik </p>
            </div>

          </div>
          <div class="col-6 col-md-3">
            <div class="half-down">
              <img src="{{asset('assets/emoji4.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
            </div>
            <div class="bg-orange border border-3 border-black rounded-5 box-potential">
              <h4 class="text-center font-32 font-bold ">Keep it Cheap <br>& Affordable</h4>
              <h4 class="text-center font-20"></h4>
              <p class="text-center">Menjaga harga tetap terjangkau & menyediakan layanan jalur bantuan</p>
            </div>

          </div>
        </div>

        <!-- STEP BY STEP -->
        <div class="desktop mt-5">
          <div class="row">
            <div class="col-4" >
              <div class="d-flex flex-row gap-3">
                <div class="bg-milk circle ratio ratio-1x1 font-82 font-black">
                    1.
                </div>
                <div>
                  <h4 class="font-36 font-bold">Register / Sign In</h4>
                  <p class="font-26">Isi Data Diri & Gabung dalam Komunitas</p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex flex-row gap-3">
                <div class="bg-milk circle ratio ratio-1x1 font-82 font-black">
                    2.
                </div>
                <div>
                  <h4 class="font-36 font-bold">Pick & Enroll</h4>
                  <p class="font-26">Pilih Program sesuai Kebutuhan Belajarmu</p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex flex-row gap-3">
                <div class="bg-milk circle ratio ratio-1x1 font-82 font-black">
                    3.
                </div>
                <div>
                  <h4 class="font-36 font-bold">Make a Change</h4>
                  <p class="font-26">Selesaikan Pembelajaran & Berkarya secara Nyata</p>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="mobile">
          <div class="row">
            <div id="carouselStep" class="carousel slide mobile" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                  <div class="d-flex flex-row">
                    <div class="bg-milk circle"><h3>1.</h3></div>
                    <div>
                      <h4>Register / Sign In </h4>
                      <p>Isi Data Diri & Gabung dalam Komunitas</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="d-flex flex-row">
                    <div class="bg-milk circle"><h3>2.</h3></div>
                    <div>
                      <h4>Pick & Enroll</h4>
                      <p>Pilih Program sesuai Kebutuhan Belajarmu</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="d-flex flex-row">
                    <div class="bg-milk circle"><h3>3.</h3></div>
                    <div>
                      <h4>Make a Change</h4>
                      <p>Selesaikan Pembelajaran & Berkarya secara Nyata</p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselStep" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselStep" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SEPARATOR -->
    {{-- gatau knp gabisa dikasih margin, jadi pake ini aja deh :))) --}}
    <div class="container">
        <p class="text-white">.</p>
    </div>

    <!-- CONTRIBUTION -->

    <div class="container-fluid bg-img-white mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <div class="bg-orange mx-auto half-up" style="width: fit-content">
                    <h3 class="text-center text-white font-bold font-44">Sejak 2023, Terus Memberi Kontribusi & Berdampak</h3>
                  </div>

                </div>
            </div>
        </div>

        <div class="container desktop">
            <div class="row px-md-5">
                <div class="col-4">
                    <div>
                    <img src="{{asset('assets/contribute1.svg')}}" alt="" class="mx-auto d-block">
                    <h1 class="text-center font-96 font-black text-orange">250+</h1>
                    <p class="text-center font-28">Total Mahasiswa dalam Tutor & Mentor Session</p>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                    <img src="{{asset('assets/contribute2.svg')}}" alt="" class="mx-auto d-block">
                    <h1 class="text-center font-96 font-black text-orange">70+</h1>
                    <p class="text-center font-28">Sesi Tutor & Mentor telah sukses dilakukan </p>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                    <img src="{{asset('assets/contribute3.svg')}}" alt="" class="mx-auto d-block">
                    <h1 class="text-center font-96 font-black text-orange">90%</h1>
                    <p class="text-center font-28">Tingkat Kepuasan Penggunaan Layanan</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile">
          <div class="row">
            <div id="carouselImpact" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div>
                    <img src="{{asset('assets/contribute1.svg')}}" alt="" class="mx-auto d-block">
                    <h1 class="text-center">250+</h1>
                    <p class="text-center">Total Mahasiswa dalam Tutor & Mentor Session</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                    <img src="{{asset('assets/contribute2.svg')}}" alt="" class="mx-auto d-block">
                    <h1 class="text-center">70+</h1>
                    <p class="text-center">Sesi Tutor & Mentor telah sukses dilakukan </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                    <img src="{{asset('assets/contribute3.svg')}}" alt="" class="mx-auto d-block">
                    <h1 class="text-center">90%</h1>
                    <p class="text-center">Tingkat Kepuasan Penggunaan Layanan</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselImpact" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselImpact" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
    </div>

    <!-- TESTIMONIAL -->
    <div class="container-fluid px-md-5 py-md-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center font-60 font-black">Apa Kata Mereka?</h2>
            <p class="text-center font-32">Mereka sudah mencoba - Yuk <span class="text-orange">Gabung dengan Ratusan Mahasiswa</span> Lainnya </p>
          </div>
        </div>
        <div class="desktop">
          <div class="row">
            <div class="col-4" >
              <div class="border border-3 border-black rounded-4 box-testi p-4">
                <h5 class="font-black font-28">Belajar jadi Mudah</h5>
                <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
                <p class="font-20">individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                <div class="d-flex flex-row">
                  <div>
                    <p class="font-20 font-bold">Michelle Angel Aryanto</p>
                    <p class="font-20">Akuntansi 21 - UNAIR</p>
                  </div>
                  <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ"></div>
                </div>

              </div>
            </div>
            <div class="col-4" >
              <div class="border border-3 border-black rounded-4 box-testi p-4">
                <h5 class="font-black font-28">Belajar jadi Mudah</h5>
                <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
                <p class="font-20">individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                <div class="d-flex flex-row">
                  <div>
                    <p class="font-20 font-bold">Michelle Angel Aryanto</p>
                    <p class="font-20">Akuntansi 21 - UNAIR</p>
                  </div>
                  <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ"></div>
                </div>

              </div>
            </div>
            <div class="col-4" >
              <div class="border border-3 border-black rounded-4 box-testi p-4">
                <h5 class="font-black font-28">Belajar jadi Mudah</h5>
                <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
                <p class="font-20">individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                <div class="d-flex flex-row">
                  <div>
                    <p class="font-20 font-bold">Michelle Angel Aryanto</p>
                    <p class="font-20">Akuntansi 21 - UNAIR</p>
                  </div>
                  <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ"></div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="mobile">
          <div class="row">
            <div id="carouselTesti" class="carousel slide mobile" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                  <div class="border border-2 border-black rounded-5 box-testi">
                    <h5>Belajar jadi Mudah</h5>
                    <img src="{{asset('assets/testi2.svg')}}" alt="" class="testi-img">
                    <p>individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                    <div class="d-flex flex-row">
                      <div>
                        <p>Michelle Angel Aryanto</p>
                        <p>Akuntansi 21 - UNAIR</p>
                      </div>
                      <div>
                        <img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ">
                      </div>
                    </div>

                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                  <div class="border border-2 border-black rounded-5 box-testi">
                    <h5>Belajar jadi Mudah</h5>
                    <img src="{{asset('assets/testi2.svg')}}" alt="" class="testi-img">
                    <p>individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                    <div class="d-flex flex-row">
                      <div>
                        <p>Michelle Angel Aryanto</p>
                        <p>Akuntansi 21 - UNAIR</p>
                      </div>
                      <div>
                        <img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ">
                      </div>
                    </div>

                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                  <div class="border border-2 border-black rounded-5 box-testi">
                    <h5>Belajar jadi Mudah</h5>
                    <img src="{{asset('assets/testi2.svg')}}" alt="" class="testi-img">
                    <p>individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                    <div class="d-flex flex-row">
                      <div>
                        <p>Michelle Angel Aryanto</p>
                        <p>Akuntansi 21 - UNAIR</p>
                      </div>
                      <div>
                        <img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselTesti" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselTesti" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>

