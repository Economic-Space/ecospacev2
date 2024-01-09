@extends('layout.navbar')

@section('content')
    <!-- HEADER -->
    <div id="banner" class="container-fluid position-relative" style="background: url('assets/background/bg_tutors.svg');background-repeat: no-repeat;background-size: cover;z-index:20;padding-top:100px;padding-bottom:108px">
        <div class=" d-flex justify-content-center align-items-center py-4">
            <div class="col-md-6 justify-content-center align-items-center ">
                <h1 class="text-one px-3 px-md-0 font-bold text-center" style="color:white" >ACADEMIC <span class="text-orange">TUTOR</span> SERVICE</h1>
                <p class="text-white text-center">Menyediakan pengajaran individu/kelompok dengan fokus pada bidang akuntansi dan ekonomi yang dilengkapi dengan modul berkualitas tinggi </p>
                {{-- <button class="btn-orange btn-nav fw-bold mt-4" id="btn-back" onclick="window.location='{{ URL::route('viewCourses'); }}'">Daftar kelas</button> --}}
            </div>
         </div>
    </div>

    <!-- FILTER -->
    <div class="container" style="position: relative;">
        <form action="" method="GET">
            <div class="container" style="position: relative;">
                <div class="box-filter d-flex justify-content-between" style="z-index: 30;">
                    <div class="col-11 col-lg-4 row m-3 g-0 ">
                        <div class="div-flex">
                        <input class="form-control" type="text" placeholder="Search by Course Name" aria-label="Search by Course Name">
                        </div>
                    </div>
                    <div class="filter col-11 col-lg-4 row m-3 g-0 ">
                        <div class="div-flex">
                            <select name="course" id="course" class="form-select me-4">
                                <option value="all">All Major</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Economics" >Economics</option>
                                <option value="Taxation">Taxation</option>
                            </select>
                        </div>
                    </div>

                    <div class="filter col-11 col-lg-4 row m-3 g-0 ">
                        <div class="div-flex">
                            <select name="Semester" id="course" class="form-select me-4">
                                <option value="all">All Semester</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Economics" >Economics</option>
                                <option value="Taxation">Taxation</option>
                            </select>
                        </div>

                    </div>

                    <div class="filter-btn col-11 col-lg-4 row m-3 g-0 px-3">
                        <div class="div-flex">
                            <button id="pilih" style="color: white" type="submit" >
                            Pilih
                            </button>
                        </div>
                    </div>
                    <div class="del-fil-btn col-11 col-lg-4 row m-3 g-0 px-3">
                        <div class="div-flex">
                            <div class="d-flex justify-content-lg-end">
                                <button id="hapus"  class="no-style" formaction="" style="text-decoration: none;color:black"><i class="fa-solid fa-broom me-2"></i>Hapus Filter</button>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4" style="border: none; border-bottom: 2px solid grey;">
                </div>
            </div>
        </form>
    </div>

    <!-- LIST TUTORS -->
    <div class="container">
        <div class="card-tutor-container">
            <div class="card-tutor">
                <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                <div class="content">
                    <div class="my-5">
                        <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                        <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                    </div>
                </div>
            </div>
            <div class="card-tutor">
                <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                <div class="content">
                    <div class="my-5">
                        <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                        <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                    </div>
                </div>
            </div>
            <div class="card-tutor">
                <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                <div class="content">
                    <div class="my-5">
                        <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                        <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                    </div>
                </div>
            </div>
            <div class="card-tutor">
                <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                <div class="content">
                    <div class="my-5">
                        <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                        <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                    </div>
                </div>
            </div>
            <div class="card-tutor">
                <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                <div class="content">
                    <div class="my-5">
                        <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                        <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                    </div>
                </div>
            </div>
            <div class="card-tutor">
                <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                <div class="content">
                    <div class="my-5">
                        <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                        <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row col-12 ">
            <div class="d-grid gap-2 col-2 mx-auto px-4 " >
                <button class="btn btn-danger w-auto" style="border-radius: 10px">Load more</button>
            </div>
        </div>
    </div>

    <!-- TUTOR SESSION -->
    <div id="t-session"  class="container mt-5 mb-5">
        <div class="row justify-content-start bg-milk rounded-4">
                <div class="col-4 pb-4">
                    <div class="emo1 full-down quarter-right">
                        <img src="{{asset('assets/home/emoji1.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
                    </div>
                    <div class="emo2 full-down quarter-right ">
                        <img src="{{asset('assets/home/emoji2.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
                    </div>
                    <div class="m-5 bg-orange border border-dark mx-auto mb-0" style="height: 180px; width:80% ;border-radius:10px">
                        <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="" class="mx-auto d-block  img-fluid " style="height: 250px">
                    </div>
                </div>
                <div class="col-7 pt-4">
                  <div>
                    <h1 class="font-black font-36">Tutor Session </h1>
                    <p>Menyediakan Kebutuhan Belajar Akademikmu | Senantiasa menjaga kualitas pengajar dan memperluas jangkauan jenis mata kuliah.</p>
                  </div>
                  <div class="mt-1">
                    <h3 class="font-bold font-24">Keunggulan Kami:</h3>
                    <div class="d-flex align-items-center">
                        <img class="icon-smile" style="width:5%" src="{{asset ('assets/home/icon3.svg')}}" alt=""><div class="font-14">Menyediakan <span class="font-bold">Tutor berdasarkan Universitas</span>  agar Relevan Ilmu & Pembelajaran sesuai dengan kebutuhan Mahasiswa</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="icon-smile" style="width:5%" src="{{asset ('assets/home/icon3.svg')}}" alt=""><div class="font-14"> <span class="font-bold">Spesialisasi Pengajaran Mata Kuliah</span> pada Bidang Akuntansi, Ilmu Ekonomi, Manajemen Bisnis & Keuangan. </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <div class="desktop">
        <div class="container px-md-5 py-md-2">
          <div class="box-white d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <img class="icon-smile" src="{{asset('assets/home/smile.svg')}}" alt=""><div class="box-black font-semibold font-32 text-white ml-2">Join Mentoring</div>
            </div>
            <div class="p-2">
              <h3 class="font-semibold">Siap Buat Belajar bersama Economic Space?</h3>
              <p>Yuk mulai mentoring dengan expert di bidang lomba, karir, dll</p>
            </div>
          </div>
        </div>

    </div>

    <div class="mobile">
        <div class="container px-md-5 py-md-2">
          <div class="box-white d-flex flex-column justify-content-center align-items-center">
            <div class="text-center">
              <h3 class="font-semibold">Ingin mendapatkan Ilmu di luar Akademik?</h3>
              <p>Yuk mulai mentoring dengan expert di bidang lomba, karir, dll</p>
            </div>
            <div>
            </div>
            <div class="mt-3">
                <div class="d-flex align-items-center">
                  <img class="icon-smile" src="{{asset('assets/home/smile.svg')}}" alt=""><div class="box-black font-semibold font-36 text-white ml-2">Join Mentoring</div>
                </div>
              </div>
          </div>
        </div>

    </div>
@endsection
