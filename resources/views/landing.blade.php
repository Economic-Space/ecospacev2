@extends('layout.navbar')

@section('content')

<!-- HEADER -->
<header class="container-fluid bg-img-orange px-md-5 py-md-5">
    <div class="container">
    <div class="row px-md-5">
        <div class="type-container">
            <h1 class=" text-white font-64 font-light mt-5" style="display: inline-block">Persiapkan Dirimu<br>menjadi <span class="font-black stroke-underline typed-out">Idaman Recruiters</span></h1>
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
                <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle">
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
                <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle">
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
                <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle">
                <p class="font-24">Dapatkan Akses 1-on-1 sama Ahlinya</p>
            </div>
            </div>
        </div>
        </div>
    </div>


    <!-- MOBILE VERSION -->
    <div class="mobile">
        <div class="row g-0">
        <div id="carouselService" class="carousel slide mobile carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
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
                    <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle">
                    <p class="font-24">Minimal IPK 4 :) Ingin Belajar Lebih Dalam</p>
                </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div  class="equal-height">
                    <div class="bg-black rounded-5 text-center service-title mx-auto py-2 half-down">
                        <h4 class="font-32 font-bold text-white">Event Space</h4>
                    </div>
                    <div class="border border-3 border-black rounded-5 text-center box-service mx-auto equal-height">
                        <img src="{{asset('assets/face2.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                        <h3 class="font-36 text-black"><b>BOOTCAMP</b></h3>
                        <p class="font-24">Belajar Ilmu Spesifik & Mendalam untuk <span class="font-semibold">pengembangan skill beyond kehidupan akademik</span></p>
                    </div>
                    <div class="bg-black rounded-5 service-title d-flex flex-row mx-auto py-2 px-1 aligns-items-center justify-content-center gap-3 half-up">
                        <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle">
                        <p class="font-24 text-white">Never say never untuk Pembelajaran Baru</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
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
                        <img src="{{asset('assets/circle.svg')}}" alt="" class="img-fluid img-circle">
                        <p class="font-24">Dapatkan Akses 1-on-1 sama Ahlinya</p>
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
        <div class="pt-5">
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
                    <div class="bg-orange rounded-3 bigger d-flex flex-column justify-content-end">
                        <h5 class="font-bold text-center">Hanum Alya K.</h5>
                        <p class="text-center">Beswan Djarum 38</p>
                        <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-red rounded-3 bigger d-flex flex-column justify-content-end">
                        <h5 class="font-bold text-center">Evan Timothy</h5>
                        <p class="text-center">Ex-Tax intern at Direktorat Jendral Pajak</p>
                        <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                    </div>
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
                <div class="mobile mt-5 mb-mt-5">
                    <div id="carouselMentor" class="carousel slide mobile carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="bg-blue rounded-4 bigger d-flex flex-column justify-content-end">
                                            <h5 class="font-bold text-center font-24">Joshua Soebroto</h5>
                                            <p class="text-center font-16">Non Permanent at EY (Junior Auditor)</p>
                                            <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="bg-orange rounded-4 bigger d-flex flex-column justify-content-end">
                                            <h5 class="font-bold text-center font-24">Joshua Soebroto</h5>
                                            <p class="text-center font-16">Non Permanent at EY (Junior Auditor)</p>
                                            <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="bg-blue rounded-4 bigger d-flex flex-column justify-content-end">
                                            <h5 class="font-bold text-center font-24">Joshua Soebroto</h5>
                                            <p class="text-center font-16">Non Permanent at EY (Junior Auditor)</p>
                                            <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="bg-orange rounded-4 bigger d-flex flex-column justify-content-end">
                                            <h5 class="font-bold text-center font-24">Joshua Soebroto</h5>
                                            <p class="text-center font-16">Non Permanent at EY (Junior Auditor)</p>
                                            <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="bg-blue rounded-4 bigger d-flex flex-column justify-content-end">
                                            <h5 class="font-bold text-center font-24">Joshua Soebroto</h5>
                                            <p class="text-center font-16">Non Permanent at EY (Junior Auditor)</p>
                                            <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="bg-orange rounded-4 bigger d-flex flex-column justify-content-end">
                                            <h5 class="font-bold text-center font-24">Joshua Soebroto</h5>
                                            <p class="text-center font-16">Non Permanent at EY (Junior Auditor)</p>
                                            <img src="{{asset('assets/mentor1.svg')}}" class="d-block w-100 img-fluid align-self-end" alt="...">
                                        </div>
                                    </div>
                                </div>
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
            <p class="text-center font-20">Menjaga harga tetap terjangkau & menyediakan layanan jalur bantuan</p>
        </div>

        </div>
    </div>

    <!-- STEP BY STEP -->
    <div class="desktop mt-5">
        <div class="row">
        <div class="col-4" >
            <div class="d-flex flex-row gap-3">
            <div class="bg-milk circle ratio ratio-1x1 font-82 font-black">
                1
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
                2
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
                3
            </div>
            <div>
                <h4 class="font-36 font-bold">Make a Change</h4>
                <p class="font-26">Selesaikan Pembelajaran & Berkarya secara Nyata</p>
            </div>
            </div>
        </div>

        </div>
    </div>


    <div class="mobile mt-5 mb-mt-5">
        <div class="row">
        <div id="carouselStep" class="carousel slide mobile carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="d-flex flex-row gap-3">
                                <div class="bg-milk circle ratio ratio-1x1 font-82 font-black">
                                    1
                                </div>
                                <div>
                                    <h4 class="font-36 font-bold">Register / Sign In</h4>
                                    <p class="font-26">Isi Data Diri & Gabung dalam Komunitas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="d-flex flex-row gap-3">
                                <div class="bg-milk circle ratio ratio-1x1 font-82 font-black">
                                    2
                                </div>
                                <div>
                                    <h4 class="font-36 font-bold">Pick & Enroll</h4>
                                    <p class="font-26">Pilih Program sesuai Kebutuhan Belajarmu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="d-flex flex-row gap-3">
                                <div class="bg-milk circle ratio ratio-1x1 font-82 font-black">
                                    3
                                </div>
                                <div>
                                    <h4 class="font-36 font-bold">Make a Change</h4>
                                    <p class="font-26">Selesaikan Pembelajaran & Berkarya secara Nyata</p>
                                </div>
                            </div>
                        </div>
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
                    <img src="{{asset('assets/contribute1.svg')}}" alt="" class="mx-auto d-block img-contribute">
                    <div class="hr-vertical">
                        <h1 class="text-center font-96 font-black text-orange">250+</h1>
                        <p class="text-center font-28">Total Mahasiswa dalam<br>Tutor & Mentor Session</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="{{asset('assets/contribute2.svg')}}" alt="" class="mx-auto d-block img-contribute">
                    <div class="hr-vertical">
                        <h1 class="text-center font-96 font-black text-orange">70+</h1>
                        <p class="text-center font-28">Sesi Tutor & Mentor<br>telah sukses dilakukan </p>
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="{{asset('assets/contribute3.svg')}}" alt="" class="mx-auto d-block img-contribute">
                    <div>
                        <h1 class="text-center font-96 font-black text-orange">90%</h1>
                        <p class="text-center font-28">Tingkat Kepuasan<br>Penggunaan Layanan</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="mobile">
        <div class="row">
        <div id="carouselImpact" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div>
                                <img src="{{asset('assets/contribute1.svg')}}" alt="" class="mx-auto d-block img-contribute">
                                <div class="hr-vertical">
                                    <h1 class="text-center font-96 font-black text-orange">250+</h1>
                                    <p class="text-center font-28">Total Mahasiswa dalam<br>Tutor & Mentor Session</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div>
                                <img src="{{asset('assets/contribute2.svg')}}" alt="" class="mx-auto d-block img-contribute">
                                <div class="hr-vertical">
                                    <h1 class="text-center font-96 font-black text-orange">70+</h1>
                                    <p class="text-center font-28">Sesi Tutor & Mentor<br>telah sukses dilakukan </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div>
                                <img src="{{asset('assets/contribute3.svg')}}" alt="" class="mx-auto d-block img-contribute">
                                <div>
                                    <h1 class="text-center font-96 font-black text-orange">90%</h1>
                                    <p class="text-center font-28">Tingkat Kepuasan<br>Penggunaan Layanan</p>
                                </div>

                            </div>
                        </div>
                    </div>
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
<div class="container-fluid px-md-5 py-md-5 mt-5">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <h2 class="text-center font-60 font-black">Apa Kata Mereka?</h2>
        <p class="text-center font-32">Mereka sudah mencoba - Yuk <span class="text-orange font-bold">Gabung dengan Ratusan Mahasiswa</span> Lainnya </p>
        </div>
    </div>
    <div class="desktop mt-3">
        <div class="row">
        <div class="col-4" >
            <div class="border border-3 border-black rounded-4 p-4">
            <h5 class="font-black font-28">Belajar jadi Mudah</h5>
            <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
            <p class="font-20 mt-4">individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

            <div class="d-flex flex-row">
                <div class="me-auto">
                <p class="font-20"><span class="font-bold">Michelle Angel Aryanto</span><br>Akuntansi 21 - UNAIR</p>
                </div>
                <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ" class="img-univ"></div>
            </div>

            </div>
        </div>
        <div class="col-4" >
            <div class="border border-3 border-blue rounded-4 p-4">
                <h5 class="font-black font-28">Belajar jadi Mudah</h5>
                <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
                <p class="font-20 mt-4">individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                <div class="d-flex flex-row">
                <div class="me-auto">
                    <p class="font-20"><span class="font-bold">Michelle Angel Aryanto</span><br>Akuntansi 21 - UNAIR</p>
                </div>
                <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ" class="img-univ"></div>
                </div>

            </div>
        </div>
        <div class="col-4" >
            <div class="border border-3 border-red rounded-4 p-4">
                <h5 class="font-black font-28">Belajar jadi Mudah</h5>
                <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
                <p class="font-20 mt-4">individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                <div class="d-flex flex-row">
                <div class="me-auto">
                    <p class="font-20"><span class="font-bold">Michelle Angel Aryanto</span><br>Akuntansi 21 - UNAIR</p>
                </div>
                <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ" class="img-univ"></div>
                </div>

            </div>
        </div>
        </div>
    </div>

    <div class="mobile">
        <div class="row">
        <div id="carouselTesti" class="carousel slide mobile carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <div class="border border-3 border-black rounded-4 box-testi p-4">
                    <h5 class="font-black font-28">Belajar jadi Mudah</h5>
                    <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
                    <p class="font-20 mt-4">individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                    <div class="d-flex flex-row">
                        <div class="me-auto">
                        <p class="font-20"><span class="font-bold">Michelle Angel Aryanto</span><br>Akuntansi 21 - UNAIR</p>
                        </div>
                        <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ" class="img-univ"></div>
                    </div>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="border border-3 border-black rounded-4 box-testi p-4">
                    <h5 class="font-black font-28">Belajar jadi Mudah</h5>
                    <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
                    <p class="font-20 mt-4">individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                    <div class="d-flex flex-row">
                        <div class="me-auto">
                        <p class="font-20"><span class="font-bold">Michelle Angel Aryanto</span><br>Akuntansi 21 - UNAIR</p>
                        </div>
                        <div><img src="{{asset('assets/univ1.svg')}}" alt="Logo Univ" class="img-univ"></div>
                    </div>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="border border-3 border-black rounded-4 box-testi p-4">
                    <h5 class="font-black font-28">Belajar jadi Mudah</h5>
                    <img src="{{asset('assets/testi1.svg')}}" alt="" class="img-fluid">
                    <p class="font-20 mt-4">individu mencapai kesuksesan akademik, persiapan kompetisi yang unggul, dan pembangunan karier yang cemerlang di bidang ekonomi. Kami menyediakan akses ke kursus dan webinar dengan narasumber</p>

                    <div class="d-flex flex-row">
                        <div class="me-auto">
                        <p class="font-20"><span class="font-bold">Michelle Angel Aryanto</span><br>Akuntansi 21 - UNAIR</p>
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
    <div class="container-fluid bg-img-blue-square mt-3" >
    <div class="px-md-5 py-md-5" style="background: url('assets/assetbgblue.svg');background-repeat: no-repeat; background-position: center; background-size: cover;z-index:0px;padding-top:0px;padding-bottom:100px;height:100%">
        <div class="wrapper">
            <div class="p"></div>
            <div class="img-area">
            <img src="{{ asset('assets/sheet1.svg') }}" class="img img-box box-4">
            <img src="{{ asset('assets/sheet2.svg') }}" class="img img-box box-5">
            <img src="{{ asset('assets/sheet3.svg') }}" class="img img-box box-6">
            <img src="{{ asset('assets/folder1.svg') }}" class="img img-box box-7">
            <img src="{{ asset('assets/folder2.svg') }}" class="img img-box box-8">
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
                <h5 class="font-32 text-orange "><span class="font-family font-black bg-white text-center"> Memberikan Layanan</span> </h5>
                <h5 class="font-32 text-orange "><span class="font-family font-black  bg-white text-center">End to End untuk</span> </h5>
                <h5 class="font-32 text-orange "><span class="font-family font-black bg-white text-center">Pengembangan Dirimu</span></h5>
            </div>
        </div>
        </div>
    </div>
    </div>

    <div class="desktop">
    <div class="container">
        <div class="box-orange d-flex justify-content-between">
        <div class="box-wa-1 flex-fill">
            <h3 class="text-white font-semibold">Punya pertanyaan lebih lanjut?</h3>
        </div>
        <div class="box-wa">
            <img class="icon-wa" src="{{asset('assets/wa.svg')}}" alt=""><div class="">Hubungi Kami</div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="mobile">
    <div class="container-fluid bg-img-blue-square" >
    <div class="px-md-5 py-md-5" style="background: url('');background-repeat: no-repeat;background-size: cover;z-index:0px;padding-top:0px;padding-bottom:100px;height:100%">
        <div class="overlay-text">
            <h5 class="text-orange "><span class="font-40 font-family font-black bg-white text-center"> Memberikan Layanan</span> </h5>
            <h5 class="text-orange "><span class="font-40 font-family font-black  bg-white text-center">End to End untuk</span> </h5>
            <h5 class="text-orange "><span class="font-40 font-family font-black bg-white text-center">Pengembangan Dirimu</span></h5>
        </div>
        <div class="cards mt-3 ">
        <div class="card card-1">
            <img src="{{ asset('assets/icon2.svg') }}" class="icon-1 m-1" alt="">
            <h3 class="font-black font-28 mt-1 text-right">WhatsApp Community</h3>
            <p class="font-20 text-right mt-1">Open Space Community to learn insightful thing about College & Professional Life</p>
            <button class="btn btn-danger font-bold mt-1">Join Now</button>
        </div>
        <div class="card card-2">
            <img src="{{ asset('assets/icon1.svg') }}" class="icon-2 m-1" alt="">
            <h3 class="font-black font-28 mt-1 text-right" style="text-align: right;">LinkedIn Career & Competition  Page</h3>
            <p class="font-20 text-right mt-1" style="text-align: right;">Exclusive access information on Career, Scholarship, Competition, etc.
            No More Miss Out on Opportunities</p>
            <button class="btn btn-danger font-bold mt-1">Discover Now</button>
        </div>
        </div>
    </div>
    </div>


    <div class="mobile">
    <div class="container">
        <div class="box-orange">
        <div class="box-wa-1">
            <p class="text-white font-semibold ">Punya pertanyaan lebih lanjut?</p>
        </div>
        <div class="box-wa justify-content-center">
            <img class="icon-wa" src="{{asset('assets/wa.svg')}}" alt=""><div class="">Hubungi Kami</div>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection


