@extends('layout.navbar')

@section('content')

<!-- HEADER -->
<header class="container-fluid bg-img-orange px-md-5 py-md-5">
    <div class="container">
    <div class="row px-md-5">
        <div>
            <h1 class="font-400 text-white font-64 mt-5" style="display: inline-block">Persiapkan Dirimu<br>menjadi <span class="font-900 stroke-underline">Idaman Recruiters</span></h1>
        </div>
    </div>
    <div class="row px-md-5 mt-4">
        <div class="col-12">
        <p class="font-400 text-white font-30">Mendukung pengembangan kemampuan spesifik, dengan tetap<br>
            Memperluas Wawasan & Kapabilitas dalam berbagai area lain
        </p>
        </div>
    </div>

    <div class="row px-md-5 mt-4">
        <div class="col-12">
        <button type="button" class="btn btn-dark font-32 font-700 p-2 px-4 rounded-4">Register Now</button>
        </div>
    </div>
    </div>

</header>




<!-- SERVICE PART -->

<div class="container-fluid px-md-5 py-md-5 mt-5">
    <div class="container">
    <div class="row desktop">
        <div class="col-12">
        <h2 class="text-center font-60 font-900"><b>Belajar - Eksplorasi - <span class="text-orange">Raih Impianmu</span></b></h2>
        <p class="text-center font-32 font-400">Satu Platform untuk Semua Kebutuhan Pengembangan Dirimu</p>
        </div>
    </div>
    <div class="row mobile">
        <div class="col-12">
        <h2 class="text-center font-60 font-900"><b>Belajar - Eksplorasi<span class="text-orange font-64"><br>Raih Impianmu</span></b></h2>
        <p class="text-center font-32 font-400">Satu Platform untuk Semua <br>Kebutuhan Pengembangan Dirimu</p>
        </div>
    </div>

    <div class="desktop py-md-3 px-md-5">
        <div class="row gx-5">
        <div class="col-4">
            <a href="{{url('/soon')}}">
                <div class="equal-height" data-aos="fade-down" data-aos-duration="1000">
                    <div class="bg-orange rounded-5 text-center service-title mx-auto py-2 half-down">
                        <h4 class="font-32 font-900">Academic Chamber</h4>
                    </div>
                    <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3 equal-height">
                        <img src="{{asset('assets/face1.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                        <h3 class="font-36 text-orange font-900"><b>TUTOR SERVICE</b></h3>
                        <p class="font-24 font-400">Perkuliahan jadi mudah bersama Expert yang <span class="font-600">membantu pembelajaran akademik</span> kalian</p>
                    </div>
                    <div class="bg-orange rounded-5 service-title d-flex flex-row mx-auto py-3 px-2 gap-3 half-up">
                        <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle align-self-center">
                        <p class="font-24 font-400 mb-0">Minimal IPK 4 :) Ingin Belajar Lebih Dalam</p>
                    </div>
                </div>
            </a>


        </div>
        <div class="col-4">
            <a href="{{url('/soon')}}">
                <div  class="equal-height" data-aos="fade-down" data-aos-duration="2000">
                    <div class="bg-black rounded-5 text-center service-title mx-auto py-2 half-down">
                        <h4 class="font-32 font-900 text-white">Event Space</h4>
                    </div>
                    <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3 equal-height">
                        <img src="{{asset('assets/face2.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                        <h3 class="font-36 font-900"><b>BOOTCAMP</b></h3>
                        <p class="font-24 font-400">Belajar Ilmu Spesifik & Mendalam untuk <span class="font-600">pengembangan skill beyond kehidupan akademik</span></p>
                    </div>
                    <div class="bg-black rounded-5 service-title d-flex flex-row mx-auto py-3 px-2 gap-3 half-up">
                        <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle align-self-center">
                        <p class="font-24 text-white font-400 mb-0">Never say never untuk Pembelajaran Baru</p>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-4">
            <a href="{{url('/soon')}}">
                <div  class="equal-height" data-aos="fade-down" data-aos-duration="3000">
                    <div class="bg-blue rounded-5 text-center service-title mx-auto py-2 half-down">
                        <h4 class="font-32 font-900">Mentorship Hub</h4>
                    </div>
                    <div class="border border-3 border-black rounded-5 text-center box-service mx-auto equal-height">
                        <img src="{{asset('assets/face3.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                        <h3 class="font-36 text-blue font-900"><b>MENTORING</b></h3>
                        <p class="font-24 font-400">Keterbatasan akses bukan menjadi tantangan lagi, tetapi kesempatan buat <span class="font-600">belajar sama orang dalam</span></p>
                    </div>
                    <div class="bg-blue rounded-5 service-title d-flex flex-row mx-auto py-3 px-2 gap-3 half-up">
                        <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle align-self-center">
                        <p class="font-24 font-400 mb-0">Dapatkan Akses 1-on-1 sama Ahlinya</p>
                    </div>
                </div>
            </a>

        </div>
        </div>
    </div>


    <!-- MOBILE VERSION -->
    <div class="mobile">
        <div class="row g-0">
        <div id="carouselService" class="carousel slide mobile" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="equal-height width-smaller">
                    <div class="bg-orange rounded-5 text-center service-title mx-auto py-2 half-down">
                        <a href="{{url('/soon')}}">
                            <h4 class="font-32 font-900">Academic Chamber</h4>
                        </a>

                    </div>
                    <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3 equal-height py-5 bg-white">
                        <img src="{{asset('assets/face1.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service pt-1">
                        <h3 class="font-44 text-orange font-900">TUTOR SERVICE</h3>
                        <p class="font-24 font-400">Perkuliahan jadi mudah bersama Expert yang <span class="font-600">membantu pembelajaran akademik</span> kalian</p>
                    </div>
                    <div class="bg-orange rounded-5 service-title d-flex flex-row mx-auto py-3 px-2 gap-3 half-up">
                        <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle align-self-center">
                        <p class="font-24 font-400 mb-0">Minimal IPK 4 :) Ingin Belajar Lebih Dalam</p>
                    </div>
                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div  class="equal-height width-smaller">
                    <div class="bg-black rounded-5 text-center service-title mx-auto py-2 half-down">
                        <a href="{{url('/soon')}}">
                            <h4 class="font-32 font-900 text-white">Event Space</h4>
                        </a>

                    </div>
                    <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3 equal-height py-5 bg-white">
                        <img src="{{asset('assets/face2.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service pt-1">
                        <h3 class="font-44 font-900">BOOTCAMP</h3>
                        <p class="font-24 font-400">Belajar Ilmu Spesifik & Mendalam untuk <span class="font-600">pengembangan skill beyond kehidupan akademik</span></p>
                    </div>
                    <div class="bg-black rounded-5 service-title d-flex flex-row mx-auto py-3 px-2 gap-3 half-up">
                        <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle align-self-center">
                        <p class="font-24 text-white font-400 mb-0">Never say never untuk Pembelajaran Baru</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                    <div  class="equal-height width-smaller">
                        <div class="bg-blue rounded-5 text-center service-title mx-auto py-2 half-down">
                            <a href="{{url('/soon')}}">
                                <h4 class="font-32 font-900">Mentorship Hub</h4>
                            </a>

                        </div>
                        <div class="border border-3 border-black rounded-5 text-center box-service mx-auto equal-height py-5 bg-white px-3">
                            <img src="{{asset('assets/face3.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service pt-1">
                            <h3 class="font-44 text-blue font-900">MENTORING</h3>
                            <p class="font-24 font-400">Keterbatasan akses bukan menjadi tantangan lagi, tetapi kesempatan buat <span class="font-600">belajar sama orang dalam</span></p>
                        </div>
                        <div class="bg-blue rounded-5 service-title d-flex flex-row mx-auto py-3 px-2 gap-3 half-up">
                            <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle align-self-center">
                            <p class="font-24 font-400 mb-0">Dapatkan Akses 1-on-1 sama Ahlinya</p>
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
<div class="container-fluid bg-black">
    <div class="container">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center flex-column">
        <div class="desktop">
            <div class="ms-md-5">
                <h3 class="font-36 text-white font-800">TEMUKAN TUTOR KULIAH & MENTOR KARIRMU</h3>
                <p class="text-white font-20 font-400">Mengundang Talent Terbaik untuk membantu kalian menghadapi Akademik & Karirmu</p>
            </div>
            <div class="bg-blue d-flex flex-row ms-md-5 rounded-5 gap-3 mb-3 align-items-center py-2 pe-1">
                <div class="ms-4"><h3 class="text-white font-44 font-900 mb-0">1.</h3></div>
                <div><p class="font-20 font-400 mb-0">Persiapan bersama <span class="font-600">Ahlinya pada Mata Kuliah</span> yang dipilih</p></div>
            </div>
            <div class="bg-orange d-flex flex-row ms-md-5 rounded-5 gap-3 align-items-center py-2 pe-1">
                <div class="ms-4"><h3 class="text-white font-44 font-900 mb-0">2.</h3></div>
                <div><p class="font-20 font-400 mb-0">Memulai perjalanan <span class="font-600">lomba, beasiswa, karir</span> dengan Mentor</p></div>
            </div>
        </div>

        <div class="mobile pt-5">
            <div class="ms-md-5">
                <h3 class="font-44 text-white font-800" style="text-align: center">TEMUKAN TUTOR KULIAH & MENTOR KARIRMU</h3>
                <p class="text-white font-32 font-400" style="text-align: center">Mengundang Talent Terbaik untuk membantu kalian menghadapi Akademik & Karirmu</p>
            </div>
            <div class="bg-blue d-flex flex-row ms-md-5 rounded-5 gap-3 mb-3 align-items-center py-2 pe-1">
                <div class="ms-4"><h3 class="text-white font-60 font-900 mb-0">1.</h3></div>
                <div><p class="font-32 font-400 mb-0">Persiapan bersama <span class="font-600">Ahlinya pada Mata Kuliah</span> yang dipilih</p></div>
            </div>
            <div class="bg-orange d-flex flex-row ms-md-5 rounded-5 gap-3 align-items-center py-2 pe-1">
                <div class="ms-4"><h3 class="text-white font-60 font-900 mb-0">2.</h3></div>
                <div><p class="font-32 font-400 mb-0">Memulai perjalanan <span class="font-600">lomba, beasiswa, karir</span> dengan Mentor</p></div>
            </div>
        </div>

        </div>
        <div class="col-md-8">
        <div class="desktop swiper sample-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-blue rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;" >
                    {{-- <h5 class="font-bold text-center font-700 font-24">Joshua Soebroto</h5>
                    <p class="text-center font-400 font-16">Non Permanent at EY (Junior Auditor)</p>
                    <img src="{{asset('assets/mentor1.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                    <img src="{{asset('assets/joshua.svg')}}" class="img-fluid mt-auto" alt="...">
                </div>
                <div class="swiper-slide bg-orange rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;">
                    {{-- <h5 class="font-bold text-center font-700 font-24">Hanum Alya K.</h5>
                    <p class="text-center font-400 font-16">Beswan Djarum 38</p>
                    <img src="{{asset('assets/mentor2.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                    <img src="{{asset('assets/hanum.svg')}}" class="img-fluid mt-auto" alt="...">
                </div>
                <div class="swiper-slide bg-red rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;">
                    {{-- <h5 class="font-bold text-center font-700 text-white font-24">Evan Timothy</h5>
                    <p class="text-center font-400 text-white font-16">Ex-Tax intern at Direktorat Jendral Pajak</p>
                    <img src="{{asset('assets/mentor3.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                    <img src="{{asset('assets/evan.svg')}}" class="img-fluid mt-auto" alt="...">
                </div>
                <div class="swiper-slide bg-darkblue rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;">
                    {{-- <h5 class="font-bold text-center font-700 text-white font-24">Evan Timothy</h5>
                    <p class="text-center font-400 text-white font-16">Ex-Tax intern at Direktorat Jendral Pajak</p>
                    <img src="{{asset('assets/mentor3.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                    <img src="{{asset('assets/anjar.svg')}}" class="img-fluid mt-auto" alt="...">
                </div>
                <div class="swiper-slide bg-blue rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;">
                    {{-- <h5 class="font-bold text-center font-700 text-white font-24">Evan Timothy</h5>
                    <p class="text-center font-400 text-white font-16">Ex-Tax intern at Direktorat Jendral Pajak</p>
                    <img src="{{asset('assets/mentor3.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                    <img src="{{asset('assets/raihan.svg')}}" class="img-fluid mt-auto" alt="...">
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

{{-- slider mentor untuk mobile --}}
<div class="container-fluid bg-black-half">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="mobile swiper mobile-slider mt-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide bg-blue rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;" >
                            {{-- <h5 class="font-bold text-center font-700 font-24">Joshua Soebroto</h5>
                            <p class="text-center font-400 font-16">Non Permanent at EY (Junior Auditor)</p>
                            <img src="{{asset('assets/mentor1.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                            <img src="{{asset('assets/joshua.svg')}}" class="img-fluid mt-auto" alt="...">
                        </div>
                        <div class="swiper-slide bg-orange rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;">
                            {{-- <h5 class="font-bold text-center font-700 font-24">Hanum Alya K.</h5>
                            <p class="text-center font-400 font-16">Beswan Djarum 38</p>
                            <img src="{{asset('assets/mentor2.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                            <img src="{{asset('assets/hanum.svg')}}" class="img-fluid mt-auto" alt="...">
                        </div>
                        <div class="swiper-slide bg-red rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;">
                            {{-- <h5 class="font-bold text-center font-700 text-white font-24">Evan Timothy</h5>
                            <p class="text-center font-400 text-white font-16">Ex-Tax intern at Direktorat Jendral Pajak</p>
                            <img src="{{asset('assets/mentor3.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                            <img src="{{asset('assets/evan.svg')}}" class="img-fluid mt-auto" alt="...">
                        </div>
                        <div class="swiper-slide bg-darkblue rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;">
                            {{-- <h5 class="font-bold text-center font-700 text-white font-24">Evan Timothy</h5>
                            <p class="text-center font-400 text-white font-16">Ex-Tax intern at Direktorat Jendral Pajak</p>
                            <img src="{{asset('assets/mentor3.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                            <img src="{{asset('assets/anjar.svg')}}" class="img-fluid mt-auto" alt="...">
                        </div>
                        <div class="swiper-slide bg-blue rounded-3 pt-3" style="margin-left: 3%; margin-right: 3%;">
                            {{-- <h5 class="font-bold text-center font-700 text-white font-24">Evan Timothy</h5>
                            <p class="text-center font-400 text-white font-16">Ex-Tax intern at Direktorat Jendral Pajak</p>
                            <img src="{{asset('assets/mentor3.svg')}}" class="img-fluid mt-auto" alt="..."> --}}
                            <img src="{{asset('assets/raihan.svg')}}" class="img-fluid mt-auto" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- POTENTIAL  -->
<div class="container-fluid px-md-5 pt-md-5 mt-5 mb-5">
    <div class="container px-md-5">
    <div class="desktop row mb-3">
        <div class="col-12">
        <h2 class="text-center font-60 font-400">Learn Now & Claim Your Title:</h2>
        <div class="bg-black mx-auto p-2" style="width: fit-content">
            <h1 class="text-center font-64 font-900 text-white">#Talent-Favorit-Top Company HR</h1>
        </div>
        <p class="text-center font-32 font-400">Kembangkan Potensimu sejak dini bersama Economic Space</p>
        </div>
    </div>

    <div class="mobile row">
        <div class="col-12">
        <h2 class="text-center font-38 font-400">Learn Now & Claim Your Title:</h2>
        <div class="bg-black mx-auto p-2" style="width: fit-content">
            <h1 class="text-center font-44 font-900 text-white">#Talent-Favorit-Top Company HR</h1>
        </div>
        <p class="text-center font-28 font-400">Kembangkan Potensimu sejak dini bersama Economic Space</p>
        </div>
    </div>

    <div class="row half-up-px">
        <div class="col-6 col-md-3" data-aos="fade-down" data-aos-duration="750">
            <div class="half-down">
                <img src="{{asset('assets/emoji1.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
            </div>
            <div class="bg-red border border-3 border-black rounded-5 box-potential">
                <h4 class="text-center font-32 font-700 text-white">Easy Access & <br>Widely Available</h4>
                <p class="text-center font-20 text-white font-400">Tidak ada lagi kata “Sulit” bagi Pelajar untuk mendapatkan akses belajar</p>
            </div>
        </div>

        <div class="col-6 col-md-3" data-aos="fade-down" data-aos-duration="1500">
        <div class="half-down">
            <img src="{{asset('assets/emoji2.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
        </div>
        <div class="bg-blue border border-3 border-black rounded-5 box-potential">
            <h4 class="text-center font-32 font-700">One Stop Solution <br>for Students</h4>
            <p class="text-center font-20 font-400">Tersedia secara lengkap dari pembelajaran akademik, skill penting, lomba, hingga karir</p>
        </div>

        </div>
        <div class="col-6 col-md-3" data-aos="fade-down" data-aos-duration="2250">
        <div class="half-down">
            <img src="{{asset('assets/emoji3.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
        </div>
        <div class="bg-black border border-3 border-black rounded-5 box-potential">
            <h4 class="text-center font-32 font-700 text-white">Your High Quality <br>Learning Partner</h4>
            <p class="text-center font-20 text-white font-400">Mengundang & bekerja sama dengan Tutor, Mentor, & Pembicara terbaik </p>
        </div>

        </div>
        <div class="col-6 col-md-3" data-aos="fade-down" data-aos-duration="3000">
        <div class="half-down">
            <img src="{{asset('assets/emoji4.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
        </div>
        <div class="bg-orange border border-3 border-black rounded-5 box-potential">
            <h4 class="text-center font-32 font-700 ">Keep it Cheap <br>& Affordable</h4>
            <p class="text-center font-20 font-400">Menjaga harga tetap terjangkau & menyediakan layanan jalur bantuan</p>
        </div>

        </div>
    </div>

    <!-- STEP BY STEP -->
    <div class="desktop mt-5 half-up-px">
        <div class="row">
        <div class="col-4" >
            <div class="d-flex flex-row gap-3">
            <div class="bg-milk circle ratio ratio-1x1 font-82 font-900">
                1
            </div>
            <div>
                <h4 class="font-36 font-700">Register / Sign In</h4>
                <p class="font-26 font-400">Isi Data Diri & Gabung dalam Komunitas</p>
            </div>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex flex-row gap-3">
            <div class="bg-milk circle ratio ratio-1x1 font-82 font-900">
                2
            </div>
            <div>
                <h4 class="font-36 font-700">Pick & Enroll</h4>
                <p class="font-26 font-400">Pilih Program sesuai Kebutuhan Belajarmu</p>
            </div>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex flex-row gap-3">
            <div class="bg-milk circle ratio ratio-1x1 font-82 font-900">
                3
            </div>
            <div>
                <h4 class="font-36 font-700">Make a Change</h4>
                <p class="font-26 font-400">Selesaikan Pembelajaran & Berkarya secara Nyata</p>
            </div>
            </div>
        </div>

        </div>
    </div>


    <div class="mobile swiper step-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="col-12 mx-auto">
                    <div class="d-flex flex-row gap-3">
                        <div class="bg-milk circle ratio ratio-1x1 font-82 font-900">
                            1
                        </div>
                        <div>
                            <h4 class="font-36 font-700">Register / Sign In</h4>
                            <p class="font-26 font-400">Isi Data Diri & Gabung dalam Komunitas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-12 mx-auto">
                    <div class="d-flex flex-row gap-3">
                        <div class="bg-milk circle ratio ratio-1x1 font-82 font-900">
                            2
                        </div>
                        <div>
                            <h4 class="font-36 font-700">Pick & Enroll</h4>
                            <p class="font-26 font-400">Pilih Program sesuai Kebutuhan Belajarmu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-12 mx-auto">
                    <div class="d-flex flex-row gap-3">
                        <div class="bg-milk circle ratio ratio-1x1 font-82 font-900">
                            3
                        </div>
                        <div>
                            <h4 class="font-36 font-700">Make a Change</h4>
                            <p class="font-26 font-400">Selesaikan Pembelajaran & Berkarya secara Nyata</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- CONTRIBUTION -->

<div class="container-fluid bg-img-white mt-5">
    <div class="container">
        <div class="row desktop">
            <div class="col-12">
                <div class="bg-orange mx-auto half-up" style="width: fit-content">
                <h3 class="text-center text-white font-900 font-44">Sejak 2023, Terus Memberi Kontribusi & Berdampak</h3>
                </div>

            </div>
        </div>

        <div class="row mobile">
            <div class="col-12">
                <div class="mx-auto half-up" style="width: fit-content">
                <h3 class="bg-orange text-center text-white font-400 font-38">Sejak 2023, Terus Memberi</h3>
                <h3 class="bg-orange text-center text-white font-900 font-44">Kontribusi & Berdampak</h3>
                </div>

            </div>
        </div>
    </div>

    <div class="container desktop">
        <div class="row px-md-5">
            <div class="col-4">
                <div>
                    <img src="{{asset('assets/contribute1.svg')}}" alt="" class="mx-auto d-block img-contribute">
                    <div class="hr-vertical">
                        <h1 class="text-center font-96 font-900 text-orange"><span id="numcounter1">250</span>+</h1>
                        <p class="text-center font-28 font-400">Total Mahasiswa dalam<br>Tutor & Mentor Session</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="{{asset('assets/contribute2.svg')}}" alt="" class="mx-auto d-block img-contribute">
                    <div class="hr-vertical">
                        <h1 class="text-center font-96 font-900 text-orange"><span id="numcounter2">70</span>+</h1>
                        <p class="text-center font-28 font-400">Sesi Tutor & Mentor<br>telah sukses dilakukan </p>
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="{{asset('assets/contribute3.svg')}}" alt="" class="mx-auto d-block img-contribute">
                    <div>
                        <h1 class="text-center font-96 font-900 text-orange"><span id="numcounter3">90</span>%</h1>
                        <p class="text-center font-28 font-400">Tingkat Kepuasan<br>Penggunaan Layanan</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="mobile">
        <div class="swiper step-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="col-12 mx-auto">
                        <img src="{{asset('assets/contribute1.svg')}}" alt="" class="mx-auto d-block img-contribute">
                        <div class="hr-vertical">
                            <h1 class="text-center font-96 font-900 text-orange">250+</h1>
                            <p class="text-center font-28 font-400">Total Mahasiswa dalam<br>Tutor & Mentor Session</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-12 mx-auto">
                        <img src="{{asset('assets/contribute2.svg')}}" alt="" class="mx-auto d-block img-contribute">
                        <div class="hr-vertical">
                            <h1 class="text-center font-96 text-orange font-900">70+</h1>
                            <p class="text-center font-28 font-400">Sesi Tutor & Mentor<br>telah sukses dilakukan </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-12 mx-auto">
                        <img src="{{asset('assets/contribute3.svg')}}" alt="" class="mx-auto d-block img-contribute">
                        <div>
                            <h1 class="text-center font-96 font-900 text-orange">90%</h1>
                            <p class="text-center font-28 font-400">Tingkat Kepuasan<br>Penggunaan Layanan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TESTIMONIAL -->
<div class="container-fluid px-md-5 py-md-5 mt-5">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <h2 class="text-center font-60 font-900">Apa Kata Mereka?</h2>
        <p class="text-center font-32 font-400">Mereka sudah mencoba - Yuk <span class="text-orange font-700">Gabung dengan Ratusan Mahasiswa</span> Lainnya </p>
        </div>
    </div>
    <div class="desktop mt-3">
        <div class="row">
        <div class="col-4" data-aos="fade-down" data-aos-duration="1000">
            <div class="border border-3 border-black rounded-4 p-4">
            <h5 class="font-900 font-28">Belajar jadi Seru</h5>
            <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
            <p class="font-20 mt-4 font-500">Wah, nggak nyangka banget deh belajar Ekonomi jadi lebih seru berkat bimbingan Kak Ali! Selain suasana yang asik, penjelasannya juga super jelas dan gampang dimengerti. Kak Ali bener-bener punya cara yang unik untuk menyampaikan materi sehingga ga bikin bosen.</p>

            <div class="d-flex flex-row">
                <div class="me-auto">
                <p class="font-20 font-400"><span class="font-bold font-700">Ester Meralda</span><br>Akuntansi 23 - UNAIR</p>
                </div>
                <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ" class="img-univ"></div>
            </div>

            </div>
        </div>
        <div class="col-4" data-aos="fade-down" data-aos-duration="2000">
            <div class="border border-3 border-blue rounded-4 p-4">
                <h5 class="font-900 font-28 font-900">Belajar jadi Pede</h5>
                <img src="{{asset('assets/testi2.svg')}}" alt="" class="img-fluid">
                <p class="font-20 mt-4 font-500">Kelas Kak Raihan dalam akuntansi adalah petualangan seru! Kak Raihan mengajar dengan sangat baik, sabar, dan penjelasan yang apik. Latihan soalnya sangat membantu untuk persiapan UAS dan meningkatkan kepercayaan diri.

                </p>

                <div class="d-flex flex-row">
                <div class="me-auto">
                    <p class="font-20 font-400"><span class="font-bold font-700">Shalima Nur Kusumastuti</span><br>Akuntansi 23 - UGM</p>
                </div>
                <div><img src="{{asset('assets/univ2.svg')}}" alt="Logo Univ" class="img-univ"></div>
                </div>

            </div>
        </div>
        <div class="col-4" data-aos="fade-down" data-aos-duration="3000">
            <div class="border border-3 border-red rounded-4 p-4">
                <h5 class="font-900 font-28 font-900">Belajar jadi Menyenangkan</h5>
                <img src="{{asset('assets/testi3.svg')}}" alt="" class="img-fluid">
                <p class="font-20 mt-4 font-500">Belajar Akuntansi jadi seru dan menyenangkan berkat Kak Imel! Kakak ini nggak hanya enak ngajarnya, tapi juga baik banget karena mau berbagi ilmu dan sharing ke kita. Kalau ada tugas atau ada yang kurang paham, Kak Imel selalu dengan sabar membantu sampai benar-benar paham.
                </p>

                <div class="d-flex flex-row">
                <div class="me-auto">
                    <p class="font-20 font-400"><span class="font-bold font-700">Nabila Putri Melati</span><br>Akuntansi 23 - UNAIR</p>
                </div>
                <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ" class="img-univ"></div>
                </div>

            </div>
        </div>
        </div>
    </div>

    <div class="mobile mb-5">
        <div class="row">
        <div id="carouselTesti" class="carousel slide mobile carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <div class="border border-3 border-black rounded-4 box-testi p-4 width-smaller bg-white">
                    <h5 class="font-900 font-28 font-900">Belajar jadi Seru</h5>
                    <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
                    <p class="font-20 mt-4 font-500">Wah, nggak nyangka banget deh belajar Ekonomi jadi lebih seru berkat bimbingan Kak Ali! Selain suasana yang asik, penjelasannya juga super jelas dan gampang dimengerti. Kak Ali bener-bener punya cara yang unik untuk menyampaikan materi sehingga ga bikin bosen.</p>

                    <div class="d-flex flex-row">
                        <div class="me-auto">
                        <p class="font-20 font-400"><span class="font-bold font-700">Ester Meralda</span><br>Akuntansi 23 - UNAIRR</p>
                        </div>
                        <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ" class="img-univ"></div>
                    </div>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="border border-3 border-blue rounded-4 box-testi p-4 width-smaller bg-white">
                    <h5 class="font-900 font-28 font-900">Belajar jadi Pede</h5>
                    <img src="{{asset('assets/testi2.svg')}}" alt="" class="img-fluid">
                    <p class="font-20 mt-4 font-500">Kelas Kak Raihan dalam akuntansi adalah petualangan seru! Kak Raihan mengajar dengan sangat baik, sabar, dan penjelasan yang apik. Latihan soalnya sangat membantu untuk persiapan UAS dan meningkatkan kepercayaan diri.</p>

                    <div class="d-flex flex-row">
                        <div class="me-auto">
                        <p class="font-20 font-400"><span class="font-bold font-700">Shalima Nur Kusumastuti</span><br>Akuntansi 23 - UGM</p>
                        </div>
                        <div><img src="{{asset('assets/univ2.svg')}}" alt="Logo Univ" class="img-univ"></div>
                    </div>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="border border-3 border-red rounded-4 box-testi p-4 width-smaller bg-white">
                    <h5 class="font-900 font-28 font-900">Belajar jadi Menyenangkan</h5>
                    <img src="{{asset('assets/testi3.svg')}}" alt="" class="img-fluid">
                    <p class="font-20 mt-4 font-500">Belajar Akuntansi jadi seru dan menyenangkan berkat Kak Imel! Kakak ini nggak hanya enak ngajarnya, tapi juga baik banget karena mau berbagi ilmu dan sharing ke kita. Kalau ada tugas atau ada yang kurang paham, Kak Imel selalu dengan sabar membantu sampai benar-benar paham.</p>

                    <div class="d-flex flex-row">
                        <div class="me-auto">
                        <p class="font-20 font-400"><span class="font-bold font-700">Nabila Putri Melati</span><br>Akuntansi 23 - UNAIR</p>
                        </div>
                        <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ" class="img-univ"></div>
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

<!-- CLOSING -->
<!--desktop-->
<div class="desktop">
    <div class="container-fluid bg-img-blue-square mt-5" >
    <div class="px-md-5 py-md-5" style="background: url('assets/assetbgblue.svg');background-repeat: no-repeat;background-size: cover;z-index:0px;padding-top:0px;padding-bottom:100px;height:100%">
        <div class="wrapper">
            <div class="p"></div>
            <div class="img-area">
            <a href="https://www.linkedin.com/company/economic-space">
                <img src="{{ asset('assets/sheet1.svg') }}" class="img img-box box-4">
            </a>
            <a href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW">
                <img src="{{ asset('assets/sheet2.svg') }}" class="img img-box box-5">
            </a>
            <img src="{{ asset('assets/sheet3.svg') }}" class="img img-box box-6">
            <a href="https://www.linkedin.com/company/economic-space">
                <img src="{{ asset('assets/folder1.svg') }}" class="img img-box box-7">
            </a>
            <a href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW">
                <img src="{{ asset('assets/folder2.svg') }}" class="img img-box box-8">
            </a>
            <img src="{{ asset('assets/folder3.svg') }}" class="img img-box box-9">
            <img src="{{ asset('assets/arrow.svg') }}" class="img img-box box-10">
            <img src="{{ asset('assets/arrow.svg') }}" class="img img-box box-11">
            <img src="{{ asset('assets/arrow.svg') }}" class="img img-box box-12">
            <img src="{{ asset('assets/ppt2.svg') }}" class="img img-box box-1">
            <img src="{{ asset('assets/ppt3.svg') }}" class="img img-box box-2">
            <img src="{{ asset('assets/ppt1.svg') }}" class="img img-box box-3">
            </div>
        </div>
        <div class="overlay-text">
            <div class="col-10 ">
                <h5 class="font-36 text-orange "><span class="font-family font-900 bg-white text-center"> Memberikan Layanan</span> </h5>
                <h5 class="font-36 text-orange "><span class="font-family font-900  bg-white text-center">End to End untuk</span> </h5>
                <h5 class="font-36 text-orange "><span class="font-family font-900 bg-white text-center">Pengembangan Dirimu</span></h5>
            </div>
        </div>
        </div>
    </div>
    </div>

    <div class="desktop">
    <div class="container">
        <div class="box-orange d-flex justify-content-between">
        <div class="box-wa-1 flex-fill">
            <h3 class="text-white font-700 font-36 mb-0 mt-2">Punya pertanyaan lebih lanjut?</h3>
        </div>
        <div class="box-wa">
            <img class="icon-wa" src="{{asset('assets/wa.svg')}}" alt=""><div class="font-400 font-24">
                <a href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW">
                    Hubungi Kami
                </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="mobile">
    <div class="container-fluid bg-img-blue-square justify-content-center" >
    <div class="px-md-5 py-md-5" style="background: url('');background-repeat: no-repeat;background-size: cover;z-index:0px;padding-top:0px;padding-bottom:100px;height:100%">
        <div class="overlay-text">
            <h5 class="text-orange "><span class="font-44 font-family font-900 bg-white text-center"> Memberikan Layanan</span> </h5>
            <h5 class="text-orange "><span class="font-44 font-family font-900  bg-white text-center">End to End untuk</span> </h5>
            <h5 class="text-orange "><span class="font-44 font-family font-900 bg-white text-center">Pengembangan Dirimu</span></h5>
        </div>
        <div class="cards mt-3">
            <div class="card card-1">
                <img src="{{ asset('assets/icon2.svg') }}" class="icon-1 m-1" alt="">
                <h3 class="font-900 font-28 mt-1 text-right">WhatsApp Community</h3>
                <p class="font-20 text-right mt-1">Open Space Community to learn insightful thing about College & Professional Life</p>
                <button class="btn btn-danger font-bold mt-1"><a href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW" class="text-white">Join Now</a></button>
            </div>
            <div class="card card-2">
                <img src="{{ asset('assets/icon1.svg') }}" class="icon-2 m-1" alt="">
                <h3 class="font-900 font-28 mt-1 text-right" style="text-align: right;">LinkedIn Career & Competition  Page</h3>
                <p class="font-20 text-right mt-1" style="text-align: right;">Exclusive access information on Career, Scholarship, Competition, etc.
                No More Miss Out on Opportunities</p>
                <button class="btn btn-danger font-bold mt-1"><a href="https://www.linkedin.com/company/economic-space/mycompany/" class="text-white">Discover Now</a></button>
            </div>
        </div>
    </div>
    </div>


    <div class="mobile">
    <div class="container">
        <div class="box-orange">
        <div class="box-wa-1 justify-content-center align-items-center">
            <p class="pt-3 text-white font-36 font-700">Punya pertanyaan lebih lanjut?</p>
        </div>
        <div class="box-wa justify-content-center pt-0 mt-0">
            <img class="icon-wa" src="{{asset('assets/wa.svg')}}" alt="">
            <div class="">
                <a href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW">
                    Hubungi Kami
                </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<footer class="desktop">
        <div class="container">
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
            <div class="mt-1">
                <div class="d-flex align-items-center">
                  <img class="icon-smile" src="{{asset('assets/smile.svg')}}" alt=""><div class="box-black font-700 font-44 text-white ml-2">Daftar Kelas</div>
                </div>
              </div>
          </div>
        </div>
        <div>
    </footer>

@endsection