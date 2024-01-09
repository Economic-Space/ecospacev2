@extends('layout.navbar')

@section('content')
    <div id="categories">
    <div id="banner" class="container-fluid container-sm-fluid container-xxl position-relative py-4 pt-5 pb-2">
        <div class="row d-flex justify-content-center">
            <div class="row col-11">
                <div class="col-11 w-100 d-flex justify-content-md-center col-md-6 row m-0 g-0 ">
                    <div class="d-flex titlebox-bg-dark rounded p-4">
                        <div>
                            <img src="{{ asset('assets/logo_text.svg') }}"c;ass="img-fluid" alt="Tagline">
                        </div>
                        <div class="ms-4">
                            <h1 class="tb-title yellow-text">Asiknya berbagi ilmu dalam lingkaran sahabat yang kompak!</h1>
                            <p class="tb-description">Daftar bersama teman satu univmu untuk mendapatkan potongan harga!</p>
                        </div>
                        <div class="ps-3">
                            <img src="{{ asset('assets/faces_3.svg') }}" alt="logo face" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- bagian atas intro categories --}}
    <div id="header" class="container-fluid container-sm-fluid container-xxl position-relative py-4 pt-5 pb-2">
        <div class="row d-flex justify-content-center">
            <div class="row col-11">
                <div class="col-11 d-flex justify-content-md-center row m-0 g-0 ">
                    <div class="col-12 align-items-center" style="color:grey">
                        {{-- {{ route('viewSubject') }} --}}
                        <p><a href="" style="text-decoration: none;color:grey">Academy </a> > GANTI NANTI > Subject title</p>
                    </div>
                </div>
                <div class="col-11 d-flex justify-content-md-center col-md-6 row m-0 g-0">
                    <div class="col-12 d-flex justify-content-left align-items-center m-0 g-0" >
                        <h1 class="fw-bold m-0 g-0">Subject Title</h1>
                    </div>
                    <div class="col-xs-12 d-flex justify-content-left align-items-center">

                        <div class="icon-details d-flex justify-content-left">
                            <div class="sks d-flex justify-content-left pe-3">
                                &#128193; Category Title
                            </div>
                            <div class="diff d-flex justify-content-left pe-3">
                                Advanced
                            </div>
                        </div>

                    </div>
                    <div class="col-12 mt-3">
                        <div class="text">
                            Subject description
                        </div>
                        <div class="col-12 mt-3">
                            <a href="https://bit.ly/RegistrationTutorService" class="btn-orange-mulai" target="_blank" style="text-decoration:none">
                                Mulai Belajar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-11 col-md-6 row m-0 g-0 ps-4 d-flex justify-content-end align-items-start category-img" >
                    <img src="{{ asset('assets/subject/course_img.png') }}" class="category-img rounded-5" alt="...">
                    {{-- kalau sudah tidak statis --}}
                    {{-- <img src="{{ asset('assets/subject/'.$subject->subject_image) }}" class="card-img-top rounded-5" alt="..."> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- SECOND SECTION --}}
    <div id="header" class="container-fluid container-sm-fluid container-xxl position-relative py-4 pt-5 pb-4">
        <div class="row d-flex justify-content-center">
            <div class="row col-11">
                <hr style="border: none; border-bottom: 2px solid grey;">
                <div class="col-12 col-md-8 row pe-3 g-0 mt-2">
                    <div class="col-12 align-items-center">
                        {{-- <p>{{$subject->subject_description}}</p> --}}
                        <h3 class="fw-bold mb-4">Topik Pembelajaran</h3>
                        {{-- @foreach($subject->topics as $t) --}}
                        <button class="accordion"><b>1. Topic Title</b></button>
                        <div class="panel">
                            <p class="py-4"><b>Objective: </b> Topic summary</p>
                            <h5><mark style="background-color: var(--darkblue);color:white">Discussion & Learning Material:</h5>
                            <p class="p-2 lm-base">topic objective</p>
                        </div>
                        {{-- @endforeach --}}

                        {{-- @if(json_decode($subject->subject_reference) != null) --}}
                        <div>
                            <p class="mt-3"><b>Referensi:</b></p>

                            <ul>

                            {{-- @foreach (json_decode($subject->subject_reference) as $ref)
                                <li>{{ $ref }}</li>
                            @endforeach --}}
                            referensi

                            </ul>
                        </div>

                        {{-- @endif --}}



                    </div>
                </div>
                <div class="col-12 col-md-4 row m-0 g-0 ps-lg-4 mt-lg-2" style="height:fit-content">
                    {{-- @if($eligible != null) --}}
                    <h3 class="fw-bold mb-3 mt-sm-4 mt-4 mt-md-0">Eligibility</h3>
                    <div class="benefit-container p-4 mt-4 mt-lg-2" style="">
                        <h4>Tutor Background</h4>
                            <p>Major: Major <br>
                                Asal Tutor
                            </p>
                            <div class="d-flex justify-content-left">
                                {{-- @foreach (json_decode($eligible->univ_logo) as $logo) --}}
                                <img src="{{ asset('assets/univ/univ1.svg') }}" class="me-2 mb-3" style="width: 20%;" alt="...">
                                {{-- @endforeach --}}
                            </div>
                            {{-- @if($eligible->open_major != null) --}}
                            <b>Additional Information</b>
                            <ul>
                                <li>Terbuka untuk Jurusan Major</li>
                                <li>Terbuka untuk area</li>
                            </ul>
                            <div class="alert" role="alert" style="background-color:#C7FBF7">
                                <p>*ps: Bagi Mahasiswa dari Univ yang tidak tertera dapat memilih Tutor dari List Univ di atas</p>
                              </div>
                            {{-- @endif --}}
                    </div>
                    {{-- @endif --}}
                    {{-- kalau benefits di sini --}}
                    {{-- <h3 class="fw-bold pb-1 mt-4">Benefits</h3>
                    <div class="benefit-container py-4 pe-2 mt-lg-2" style="">
                        <ul style="font-size:14px;" class="d-flex flex-column justify-content-center align-items-start">
                            <div class="mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-apple-whole" style="color: #000320;font-size: 16px"></i>
                                <p class="m-0"><b> Mentor</b> yang ahli dalam bidangnya</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-sheet-plastic pe-2" style="color: #000320;font-size: 16px"></i>
                                <p class="m-0"><b>  Modul</b> & latihan soal berkualitas</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-book" style="color: #15172b;font-size: 16px"></i>
                                <p class="m-0">Tambahan materi: Referensi<b> E-book</b></p>
                            </div>
                            <div class="mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-video" style="color: #15172b;font-size: 16px"></i>
                                <p class="m-0"><b>Rekaman kelas</b> online</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-pen" style="color: #15172b;font-size: 16px"></i>
                                <p class="m-0"><b>Konsultasi</b> materi atau tugas</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-trophy" style="color: #15172b;font-size: 16px"></i>
                                <p class="m-0">Akses ke exclusive <b>group LinkedIn Career & Competition</b></p>
                            </div>
                            <div class="mb-2 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-people-roof" style="color: #15172b;font-size: 16px"></i>
                                <p class="m-0">Join <b>WA Community</b> group</p>
                            </div>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- BENEFITS --}}
    <div id="header" class="container-fluid container-sm-fluid container-xxl position-relative pt-sm-1 pt-lg-5 pb-2">
        <div class="row d-flex justify-content-center">
            <div class="col-11 row m-0 g-0 ">
                <h3 class="fw-bold pb-4">Benefits</h3>
                <div class="benefit-container py-4 px-4" style="">
                    <ul style="font-size:16px;" class="row">
                        <div class="col-12 col-md-5 pe-lg-5 col-sm-12 p-sm-0 pb-sm-3 pb-md-0 pe-0 pe-sm-0 ms-0 ps-0">
                            <div class="mb-3 d-flex justify-content-left align-items-center">
                                <i class="fa-solid fa-apple-whole" style="color:var(--orange);font-size: 16px"></i>
                                <p class="m-0"><b> Mentor</b> yang ahli dalam bidangnya</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-left align-items-center">
                                <i class="fa-solid fa-sheet-plastic pe-2" style="color:var(--orange);font-size: 16px"></i>
                                <p class="m-0"><b>  Modul</b> & latihan soal berkualitas</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-left align-items-center">
                                <i class="fa-solid fa-book" style="color: var(--orange);font-size: 16px"></i>
                                <p class="m-0">Tambahan materi: Referensi<b> E-book</b></p>
                            </div>
                            <div class="d-flex justify-content-left align-items-center">
                                <i class="fa-solid fa-video" style="color: var(--orange);font-size: 16px"></i>
                                <p class="m-0"><b>Rekaman kelas</b> online</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 ps-lg-5 col-sm-12 ps-sm-0 ps-0 pt-3 pt-sm-0">
                            <div class="mb-3 d-flex justify-content-left align-items-center">
                                <i class="fa-solid fa-pen" style="color: var(--orange);font-size: 16px"></i>
                                <p class="m-0"><b>Konsultasi</b> materi atau tugas</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-left align-items-center">
                                <i class="fa-solid fa-trophy" style="color: var(--orange);font-size: 16px"></i>
                                <p class="m-0">Akses ke exclusive <b>group LinkedIn Career & Competition</b></p>
                            </div>
                            <div class="d-flex justify-content-left align-items-center">
                                <i class="fa-solid fa-people-roof" style="color: var(--orange);font-size: 16px"></i>
                                <p class="m-0">Join <b>WA Community</b> group</p>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- THIRD SECTION: table comparison --}}
    <div id="header" class="container-fluid container-sm-fluid container-xxl position-relative pt-sm-1 pt-lg-5 pb-2">
        <div class="row d-flex justify-content-center">
            <div class="col-11 row m-0 g-0 ">
                <h3 class="fw-bold mb-4 mt-4">Paket Pembelajaran</h3>
                <div class="table-responsive">
                    <table class="table p-4">
                        <thead class="">
                        {{-- <tr class="header-table p-4"> --}}
                            <th> </th>
                            <th id="indiv"><span style="background-color:var(--lightblue);padding:10px 40px;border-radius:10px;">Bootcamp</span></th>
                            <th id="g1"><span style="background-color:#B5E9E5;;padding:10px 40px;border-radius:10px">Premium</span></th>
                            <th id="g2"><span style="background-color:#5BDED2;padding:10px 40px;border-radius:10px">Executive</span></th>
                        </tr>
                        <tr>
                            <td class="bg-blue"id="live">Registration</td>
                            <td>Individual</td>
                            <td>Group</td>
                            <td>Group</td>
                        </tr>
                        <tr>
                            <td class="bg-blue"id="live">Jumlah Partisipan dalam ruangan</td>
                            <td>30-50</td>
                            <td>1-5</td>
                            <td>6-8</td>
                        </tr>
                        <tr>
                            <td class="bg-blue"id="live">Live Discussion (2-3 Jam)<br>Review Materi + Bahas Contoh Soal</td>
                            <td id="boothcamp">Bootcamp</td>
                            <td>2x Sesi</td>
                            <td>2x Sesi</td>
                        </tr>
                        <tr>
                            <td class="bg-blue"id="live">Material Learning</td>
                            <td>Fixed</td>
                            <td>Flexible</td>
                            <td>Flexible</td>
                        </tr>
                        <tr>
                            <td class="bg-blue"id="live">Konsultasi Personal Case/Homework</td>
                            <td>❌</td>
                            <td>✔️</td>
                            <td>✔️</td>
                        </tr>
                        <tr>
                            <td class="bg-blue">Memilih Tutor <br>*Berdasarkan Univ/Wilayah</td>
                            <td>❌</td>
                            <td>✔️</td>
                            <td>✔️</td>
                        </tr>
                        <tr>
                            <td class="bg-blue">Rekaman Kelas</td>
                            <td>Akses 3 Bulan</td>
                            <td>Akses 3 Bulan</td>
                            <td>Akses 3 Bulan</td>
                        </tr>
                        <tr>
                            <td class="bg-blue">Modul & Soal Latihan</td>
                            <td>Akses 1 Bulan</td>
                            <td>Akses 1 Bulan</td>
                            <td>Akses 1 Bulan</td>
                        </tr>
                        <tr>
                            <td class="bg-blue">Platform Belajar</td>
                            <td>Online</td>
                            <td>Online/Offline</td>
                            <td>Online/Offline</td>
                        </tr>
                        <tr>
                            <td class="bg-blue">Tanggal & Waktu</td>
                            <td>Sudah terjadwal</td>
                            <td>Flexible</td>
                            <td>Flexible</td>
                        </tr>
                        <tr>
                            <td class="bg-blue">Exclusive Career and Competition<br>LinkedIn Group</td>
                            <td>✔️</td>
                            <td>✔️</td>
                            <td>✔️</td>
                        </tr>
                        <tr>
                            <td class="bg-blue" id="harga">Harga Mulai dari</td>
                            <td>Rp 65.000 (8 sesi)*</td>
                            <td>Rp 330.000 (2 sesi)</td>
                            <td>Rp 400.000 (2 sesi)</td>
                        </tr>
                        <tr>
                            <td class="bg-blue" id="harga">Harga Tambahan per Sesi (start sesi ke-3)</td>
                            <td>-</td>
                            <td>Rp 150.000/sesi</td>
                            <td>Rp 185.000/sesi</td>
                        </tr>
                    </table>
                    <p class="ket-tabel">*Harga akan berubah tergantung modul</p>
                </div>
            </div>
        </div>
    </div>



    {{-- FOURTH SECTION --}}
    <div id="header" class="container-fluid container-sm-fluid container-xxl position-relative pt-2 pb-2 mb-4">
        <div class="row d-flex justify-content-center">
            <div class="col-11 row">
                <h3 class="fw-bold py-2 m-0 g-0 mb-4 mt-4">Kamu juga mungkin suka..</h3>
                {{-- @foreach($subject_lain as $lain) --}}
                <div class="card-flex col-lg-3 col-md-4 col-sm-6 col-xs-12 pb-4">
                    <a href="{{url('detailSubject')}}" style="text-decoration:none">
                        <div class="card" style="width:100%">
                            <img src="{{ asset('assets/subject/') }}" class="card-img-top" alt="image course" style="border-radius:20px 20px 0 0 ">
                            <div class="card-body w-100">

                                <p class="title-card">Subject Lain</p>
                                <p class="list-card">&#128193;
                                    Category Title
                                <br>&#128142;
                                Intermediate
                                </p>
                            </div>
                        </div>
                    </a>

                </div>

                {{-- @endforeach --}}

            </div>
        </div>
    </div>


    <a href="https://wa.link/fbua0a" target="_blank">
        <div class="fix-bottom">
            <img src="{{ asset('assets/konsultan.svg') }}" alt="Tanya konsultan">
        </div>
    </a>
@endsection
