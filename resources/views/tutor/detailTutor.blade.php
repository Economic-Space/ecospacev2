@extends('layout.navbar')

@section('content')

    {{-- banner --}}
    <div class="container-fluid pt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center align-items-center rounded-4 bg-darkblue p-3">
                        <div class="text-center">
                            <img src="{{ asset('assets/tutorDetail/empowering_logo.svg') }}" class="img-fluid" alt="Tagline" width="85%">
                        </div>
                        <div class="ps-3">
                            <h3 class="text-orange font-700 font-30">Asiknya berbagi ilmu dalam lingkaran sahabat yang kompak!</h3>
                            <p class="text-milk font-500 font-18">Daftar bersama teman satu univmu untuk mendapatkan potongan harga!</p>
                        </div>
                        <div class="text-center">
                            <img src="{{ asset('assets/tutorDetail/faces3.svg') }}" alt="logo face" class="img-fluid" width="80%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- intro tutor --}}
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div>
                        <p><a href="">Academy</a> > Introduction to Accounting</p>
                        <h1 class="">Introduction to Accounting</h1>
                        <div class="d-flex justify-content-left">
                            <p>Accounting</p>
                            <p>Economics</p>
                        </div>
                        <div class="d-flex justify-content-left">
                            <p>Category</p>
                            <p>Semester 1-2</p>
                        </div>
                        <button>
                            Mulai Belajar
                        </button>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/tutorDetail/thumbnail.svg') }}" class="img-fluid w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    {{-- tutor content --}}
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <hr style="border: none; border-bottom: 2px solid grey;">
                <div class="col-8">
                    {{-- sebelah kiri --}}

                    <p>Introduction to Accounting merupakan mata kuliah yang memberikan pengetahuan kepada mahasiswa tentang dasar-dasar penyusunan laporan keuangan, memahami konsep persamaan dasar akuntansi maupun konsep pengakuan, pengukuran, penilaian, dan pelaporan, dan menganalisis elemen-elemen laporan keuangan baik akun-akun aset, liabilitas, maupun ekuitas perusahaan.</p>
                    <h2>Tutor Material Discussion</h2>
                    <p>Referensi Pembelajaran: Financial Accounting with International Financial Reporting Standards 4th Edition - Weygandt, Kimmel, Kieso</p>

                    {{-- accordion --}}
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              Accordion Item #1
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                              Accordion Item #2
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="col-4">
                    <div>
                        {{-- card pertama --}}
                        <div>
                            <h3>Tutor Background</h3>
                            <p>Asal Universitas Tutor:</p>
                            <div class="d-flex justify-content-left">
                                <img src="{{ asset('assets/univ/univ1.svg') }}" class="img-fluid" alt="Tagline" >
                                <img src="{{ asset('assets/univ/univ1.svg') }}" class="img-fluid" alt="Tagline" >
                                <img src="{{ asset('assets/univ/univ1.svg') }}" class="img-fluid" alt="Tagline" >
                            </div>
                            <button>Click Here for Tutor Details</button>
                            <h5>Additional Information</h5>
                            <ul>
                                <li>Bagi Mahasiswa dari Universitas selain dari List diatas tetap dapat <span>BELAJAR BERSAMA DISINI</span></li>
                                <li>Customer dapat memilih Tutor dari Asal Univ / Nama Tutor</li>
                            </ul>
                        </div>

                        {{-- card kedua --}}
                        <div>
                            <h3>Benefit for You</h3>
                            <div class="d-flex justify-content-left">
                                <img src="{{ asset('assets/tutorDetail/benefit1.svg') }}" class="img-fluid" alt="" >
                                <p>1. </p>
                                <p>Expert Tutor yang telah diseleksi dengan kapabilitias pengetahuan yang baik</p>
                            </div>
                            <div class="d-flex justify-content-left">
                                <img src="{{ asset('assets/tutorDetail/benefit2.svg') }}" class="img-fluid" alt="" >
                                <p>2. </p>
                                <p>Sistem Mahasiswa to Mahasiswa, sehingga bahasan materi menjadi lebih tepat & relatable</p>
                            </div>
                            <div class="d-flex justify-content-left">
                                <img src="{{ asset('assets/tutorDetail/benefit3.svg') }}" class="img-fluid" alt="" >
                                <p>3. </p>
                                <p>Konsultasi Materi / Tugas dan Persiapan Ujian menjadi lebih mudah bersama Tutor</p>
                            </div>
                            <div class="d-flex justify-content-left">
                                <p>1x Tutor Session:</p>
                                <p>90 Minutes (Online / Onsite) <br>Akses pada PPT Modul Subtopik </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Pilihan Paket Promosi</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div>
                        <img src="{{ asset('assets/home/face1.svg') }}" class="img-fluid" alt="">
                        <p>Paket Murah Meriah</p>
                        <h5>Rp 350.000,-</h5>
                        <p>Dari Harga Awal Rp 320.000</p>
                        <ul>
                            <li>Jumlah partisipan 1-5 orang</li>
                            <li>Tanggal dan waktu fleksibel</li>
                        </ul>
                        <button>Claim Voucher Code</button>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <div class="half-down bg-orange">TERFAVORIT</div>
                        <div>
                            <img src="{{ asset('assets/home/face1.svg') }}" class="img-fluid" alt="">
                            <p>Paket Murah Meriah</p>
                            <h5>Rp 350.000,-</h5>
                            <p>Dari Harga Awal Rp 320.000</p>
                            <ul>
                                <li>Jumlah partisipan 1-5 orang</li>
                                <li>Tanggal dan waktu fleksibel</li>
                            </ul>
                            <button>Claim Voucher Code</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <img src="{{ asset('assets/home/face1.svg') }}" class="img-fluid" alt="">
                        <p>Paket Murah Meriah</p>
                        <h5>Rp 350.000,-</h5>
                        <p>Dari Harga Awal Rp 320.000</p>
                        <ul>
                            <li>Jumlah partisipan 1-5 orang</li>
                            <li>Tanggal dan waktu fleksibel</li>
                        </ul>
                        <button>Claim Voucher Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Kamu juga mungkin suka...</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-4 card-tutor">
                    <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                    <div class="content">
                        <div class="my-5">
                            <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                            <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 card-tutor">
                    <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                    <div class="content">
                        <div class="my-5">
                            <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                            <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 card-tutor">
                    <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                    <div class="content">
                        <div class="my-5">
                            <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                            <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 card-tutor">
                    <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                    <div class="content">
                        <div class="my-5">
                            <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                            <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
                        </div>
                    </div>
                </div>
                <div class="col-4 card-tutor">
                    <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                    <div class="content">
                        <div class="my-5">
                            <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">Introduction to</span> </h5>
                            <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5>
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
