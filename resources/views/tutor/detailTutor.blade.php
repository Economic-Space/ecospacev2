@extends('layout.navbar')

@section('content')

    {{-- banner --}}
    <div class="desktop container-fluid mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="d-md-flex justify-content-center align-items-center rounded-4 bg-darkblue p-3">
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
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mobile mb-2">
                    <img src="{{ asset('assets/tutorDetail/thumbnail.svg') }}" class="img-fluid w-100" alt="...">
                </div>
                <div class="col-12 col-md-6 align-self-center">
                    <p class="font-21 font-400"><a href="{{route('viewTutors')}}">Academy</a> > {{$subject->subject_title}}</p>
                    <h1 class="font-48 font-700 mt-3">{{$subject->subject_title}}</h1>
                    <div class="d-flex justify-content-left gap-3">
                        @foreach(json_decode($subject->subject_majors) as $major)
                        <p class="bg-milk py-1 px-2 rounded-3 font-18 font-400">{{$major}}</p>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-left gap-3">
                        <p class="font-18 font-400"><i class="fa-solid fa-folder me-2"></i> {{$subject->subject_category}}</p>
                        <p class="font-18 font-400"><i class="fa-solid fa-gem me-2"></i> {{$subject->subject_semester}}</p>
                    </div>
                    <button class="bg-orange rounded-3 border-0 font-30 font-500 text-white px-5 py-2 mt-3">
                        Mulai Belajar
                    </button>
                </div>
                <div class="col-6 desktop">
                    {{-- TODO NANTI DIGANTI --}}
                    <img src="{{ asset('assets/tutorDetail/thumbnail.svg') }}" class="img-fluid w-100" alt="...">
                </div>

            </div>
        </div>
    </div>

    {{-- tutor content --}}
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row mb-5">
                <hr style="border: none; border-bottom: 3px solid grey;">
            </div>
            <div class="row gx-5">

                {{-- sebelah kiri --}}
                <div class="col-12 col-md-8">
                    <p class="font-21 font-400 text-justify">{{$subject->subject_description}}</p>
                    <h2 class="font-40 font-900 text-orange mt-4">Tutor Material Discussion</h2>
                    <p class="font-21 font-700 text-justify">Referensi Pembelajaran:</p>
                    <ul>
                        @foreach(json_decode($subject->subject_references) as $reference)
                        <li class="font-21 font-400 text-justify">{{$reference}}</li>
                        @endforeach
                    </ul>

                    {{-- accordion --}}
                    <div class="accordion mt-4" id="accordionPanelsStayOpenExample">
                        @foreach($subject->topics as $topic)
                        <div class="accordion-item mb-2">
                          <h2 class="accordion-header" id="panelsStayOpen-heading{{$topic->topic_number}}">
                            <button class="accordion-button font-22 font-500" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$topic->topic_number}}" aria-expanded="true" aria-controls="panelsStayOpen-collapse{{$topic->topic_number}}">
                                {{$topic->topic_number}}. {{$topic->topic_title}}
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapse{{$topic->topic_number}}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading{{$topic->topic_number}}">
                            <div class="accordion-body">
                              <ol>
                                @foreach(json_decode($topic->topic_content) as $content)
                                <li class="font-22 font-400">{{$content}}</li>
                                @endforeach
                              </ol>
                              <p class="font-22 font-400 text-justify"><span class=" font-700">Objective: </span>{{$topic->topic_objective}}</p>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                </div>

                <div class="col-12 col-md-4">
                    <div>
                        {{-- card pertama --}}
                        <div class="border border-2 rounded-4 py-3 px-4">
                            <h3 class="font-36 font-900">Tutor Background</h3>
                            <p class="font-20 font-400">Asal Universitas Tutor:</p>
                            <div class="d-lg-flex justify-content-left gap-lg-3">
                                {{-- TODO NANTI DIGANTI --}}
                                <img src="{{ asset('assets/univ/univ1.svg') }}" class="img-fluid" alt="Tagline" >
                                <img src="{{ asset('assets/univ/univ1.svg') }}" class="img-fluid" alt="Tagline" >
                                <img src="{{ asset('assets/univ/univ1.svg') }}" class="img-fluid" alt="Tagline" >
                            </div>
                            <button class="font-400 font-24 bg-lightblue border-0 rounded-3 px-3 py-2 mt-3">Click Here for Tutor Details</button>
                            <h5 class="font-24 font-700 mt-5">Additional Information</h5>
                            <ul>
                                <li class="font-20 font-400 text-justify">Bagi Mahasiswa dari Universitas selain dari List diatas tetap dapat <span class="font-26 font-700 text-red">BELAJAR BERSAMA DISINI</span></li>
                                <li class="font-20 font-400 text-justify">Customer dapat memilih Tutor dari <span class="font-20 font-700">Asal Univ / Nama Tutor</span></li>
                            </ul>
                        </div>

                        {{-- card kedua --}}
                        <div class="border border-2 rounded-4 mt-4 py-3 px-4">
                            <h3 class="font-900 font-32 text-orange">Benefit for You</h3>
                            <div class="d-flex justify-content-left gap-2">
                                <img src="{{ asset('assets/tutorDetail/benefit1.svg') }}" style="max-width: 80px" class="img-fluid" alt="" >
                                <p class="font-18 font-500">1. </p>
                                <p class="font-18 font-500">Expert Tutor yang telah diseleksi dengan kapabilitias pengetahuan yang baik</p>
                            </div>
                            <div class="d-flex justify-content-left gap-2 mt-2">
                                <img src="{{ asset('assets/tutorDetail/benefit2.svg') }}" style="max-width: 80px" class="img-fluid" alt="" >
                                <p class="font-18 font-500">2. </p>
                                <p class="font-18 font-500">Sistem Mahasiswa to Mahasiswa, sehingga bahasan materi menjadi lebih tepat & relatable</p>
                            </div>
                            <div class="d-flex justify-content-left gap-2 mt-2">
                                <img src="{{ asset('assets/tutorDetail/benefit3.svg') }}" style="max-width: 80px" class="img-fluid" alt="" >
                                <p class="font-18 font-500">3. </p>
                                <p class="font-18 font-500">Konsultasi Materi / Tugas dan Persiapan Ujian menjadi lebih mudah bersama Tutor</p>
                            </div>
                            <div class="bg-lightblue rounded-4 p-2 mt-2">
                                <p class="font-22 font-700">1x Tutor Session:</p>
                                <ul>
                                    <li class="font-18 font-500">90 Minutes (Online / Onsite)</li>
                                    <li class="font-18 font-500">Akses pada PPT Modul Subtopik</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="font-700 font-34">Pilihan Paket Promosi</h4>
                </div>
            </div>
            <div class="row mt-5 gy-3 gy-md-0">
                <div class="col-12 col-md-4">
                    <div class="bg-milk rounded-4 text-center py-5 px-4">
                        <img src="{{ asset('assets/home/face1.svg') }}" style="max-width: 150px" class="img-fluid" alt="">
                        <p class="font-28 font-700 text-orange mt-2">Paket Murah Meriah</p>
                        <h5 class="font-48 font-900">Rp 350.000,-</h5>
                        <p class="font-400 font-24">Dari Harga Awal Rp 320.000</p>
                        <ul class="text-start check ps-5 mt-2">
                            <li class="font-20 font-500">Jumlah partisipan 1-5 orang</li>
                            <li class="font-20 font-500">Tanggal dan waktu fleksibel</li>
                        </ul>
                        <button class="border-0 rounded-5 bg-orange text-white px-5 py-2 font-24 font-500 w-100 mt-3">Book Now</button>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="half-up-30">
                        <div class="bg-orange width-80 half-down rounded-4 text-center text-white py-3 mx-auto font-24 font-600">TERFAVORIT</div>
                        <div class="bg-blue rounded-4 text-center py-5 px-4">
                            <img src="{{ asset('assets/home/face1.svg') }}" style="max-width: 150px" class="img-fluid" alt="">
                            <p class="font-28 font-700 text-orange mt-2">Paket Murah Meriah</p>
                            <h5 class="font-48 font-900">Rp 350.000,-</h5>
                            <p class="font-400 font-24">Dari Harga Awal Rp 320.000</p>
                            <ul class="text-start check ps-5 mt-2">
                                <li class="font-20 font-500">Jumlah partisipan 1-5 orang</li>
                                <li class="font-20 font-500">Tanggal dan waktu fleksibel</li>
                            </ul>
                            <button class="border-0 rounded-5 bg-orange text-white px-5 py-2 font-24 font-500 w-100 mt-3">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="bg-milk rounded-4 text-center py-5 px-4">
                        <img src="{{ asset('assets/home/face1.svg') }}" style="max-width: 150px" class="img-fluid" alt="">
                        <p class="font-28 font-700 text-orange mt-2">Paket Murah Meriah</p>
                        <h5 class="font-48 font-900">Rp 350.000,-</h5>
                        <p class="font-400 font-24">Dari Harga Awal Rp 320.000</p>
                        <ul class="text-start check ps-5 mt-2">
                            <li class="font-20 font-500">Jumlah partisipan 1-5 orang</li>
                            <li class="font-20 font-500">Tanggal dan waktu fleksibel</li>
                        </ul>
                        <button class="border-0 rounded-5 bg-orange text-white px-5 py-2 font-24 font-500 w-100 mt-3">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h4 class="font-34 font-700">Kamu juga mungkin suka...</h4>
                </div>
            </div>
            <div class="row">
                @foreach($other_subjects as $tutor)
                <div class="col-12 col-md-4 card-tutor">
                    {{-- TODO NANTI DIGANTI --}}
                    <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                    <div class="content">
                        <div class="my-5">
                            <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">{{$tutor->subject_title}}</span> </h5>
                            {{-- <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5> --}}
                        </div>
                    </div>
                </div>
                @endforeach

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
