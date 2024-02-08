@extends('layout.navbar')

@section('content')

    {{-- banner --}}
    <div class="desktop container-fluid mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="d-md-flex justify-content-center align-items-center rounded-4 bg-darkblue p-3 py-4">
                        <img src="{{ asset('assets/tutorDetail/empowering_logo.svg') }}" class="img-fluid" alt="Tagline" width="25%">
                        <div class=" ps-4 mt-2">
                            <h3 class="text-orange font-700 font-40">Asiknya berbagi ilmu dalam lingkaran sahabat yang kontak!</h3>
                            <p class="text-milk font-500 font-18">Daftar bersama teman satu univmu untuk mendapatkan potongan harga!</p>
                        </div>
                        <img src="{{ asset('assets/tutorDetail/faces3.svg') }}" alt="logo face" class="img-fluid" width="25%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- intro tutor --}}
    <div class="container-fluid mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 mobile mb-2 card-tutor">
                    {{-- <img src="{{ asset('assets/courseImage/'.$subject->subject_image) }}" class="img-fluid w-100" alt="..."> --}}
                    <div class="card-tutor">
                        <a href="{{ URL::route('detailTutor', $subject->id) }}">
                            <div class="d-flex justify-content-center rounded-3">
                                <h5 class="font-24 font-700 text-black text-center align-self-center justify-content-center" ><span class="font-family font-black bg-white text-center px-2">{{$subject->subject_title}}</span> </h5>
                                <img src="{{asset('assets/thumbnail/'.$subject->subject_thumbnail)}}" alt="Person Photo" class="img-tutor img-fluid" width="40%">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 align-self-center">
                    <p class="font-21 font-400 mb-2"><a href="{{route('viewTutors')}}">Academy</a> > {{$subject->subject_title}}</p>
                    <h1 class="font-48 font-700">{{$subject->subject_title}}</h1>
                    <div class="d-flex justify-content-left gap-3 mt-3">
                        @foreach(json_decode($subject->subject_majors) as $major)
                        <p class="bg-milk py-1 px-2 rounded-3 font-18 font-400">{{$major}}</p>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-left gap-3 mb-2">
                        <p class="font-18 font-400"><i class="fa-solid fa-folder me-2"></i> {{$subject->subject_category}}</p>
                        <p class="font-18 font-400"><i class="fa-solid fa-gem me-2"></i> {{$subject->subject_semester}}</p>
                    </div>
                    <a class="bg-orange rounded-3 border-0 font-30 font-500 text-white px-5 py-2" href="https://bit.ly/RegistrationTutorService">
                        Mulai Belajar
                    </a>
                </div>
                <div class="col-6 desktop">
                    {{-- TODO NANTI DIGANTI --}}
                    {{-- <img src="{{ asset('assets/courseImage/'.$subject->subject_image) }}" class="img-fluid w-100" alt="..."> --}}
                    <div class="card-tutor">
                        <a href="{{ URL::route('detailTutor', $subject->id) }}">
                            <div class="d-flex justify-content-center rounded-3">
                                <h5 class="font-24 font-700 text-black text-center align-self-center justify-content-center" ><span class="font-family font-black bg-white text-center px-2">{{$subject->subject_title}}</span> </h5>
                                <img src="{{asset('assets/thumbnail/'.$subject->subject_thumbnail)}}" alt="Person Photo" class="img-tutor img-fluid">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- tutor content --}}
    <div class="container-fluid mt-3">
        <div class="container">
            <div class="row mb-3">
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
                        @foreach($subject->topics as $index => $topic)
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="panelsStayOpen-heading{{$topic->topic_number}}">
                                    <button class="accordion-button font-22 font-500 {{ $index === 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$topic->topic_number}}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="panelsStayOpen-collapse{{$topic->topic_number}}">
                                        {{$topic->topic_number}}. {{$topic->topic_title}}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse{{$topic->topic_number}}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="panelsStayOpen-heading{{$topic->topic_number}}">
                                    <div class="accordion-body p-0 px-4 pt-3">
                                        <ol>
                                            @foreach(json_decode($topic->topic_content) as $content)
                                                <li class="font-22 font-400">{{$content}}</li>
                                            @endforeach
                                        </ol>
                                        <p class="font-22 font-400 text-justify"><span class="font-700">Objective: </span>{{$topic->topic_objective}}</p>
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
                                @foreach(json_decode($subject->subject_univ) as $univ)
                                <img src="{{ asset('assets/univ/'.$univ) }}" class="img-fluid" alt="Tagline" >
                                @endforeach

                            </div>
                            <button class="font-400 font-24 bg-lightblue border-0 rounded-3 px-3 py-2 mt-3">Click Here for Tutor Details</button>
                            <h5 class="font-24 font-700 mt-4">Additional Information</h5>
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
                            <div class="bg-lightblue rounded-4 pt-3 pb-1 mt-2 ps-4">
                                <p class="font-28 font-700 mb-1">1x Tutor Session:</p>
                                <ul>
                                    <li class="font-20 font-500">90 Minutes (Online / Onsite)</li>
                                    <li class="font-20 font-500">Akses pada PPT Modul Subtopik</li>
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
                        <img src="{{ asset('assets/home/face2.svg') }}" style="height: 140px" class="img-fluid" alt="">
                        <p class="font-28 font-700 mt-2 text-red">Fresh Launch Kit</p>
                        <h5 class="font-48 font-900">Rp 280.000,-</h5>
                        <p class="font-400 font-24">Dari Harga Awal Rp 300.000</p>
                        <ul class="text-start check ps-5 mt-2 mb-4">
                            <li class="font-20 font-500">Pengguna baru Tutor Service</li>
                            <li class="font-20 font-500">Pembelian Paket A (1-3 orang)</li>
                        </ul>
                        <a class="border-0 rounded-5 bg-red text-white px-5 py-2 font-36 font-500 w-100" href="https://bit.ly/RegistrationTutorService">Book Now</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="half-up-30">
                        <div class="bg-orange width-80 half-down rounded-4 text-center text-white py-3 mx-auto font-24 font-600">TERFAVORIT</div>
                        <div class="bg-lightblue rounded-4 text-center py-5 px-4">
                            <img src="{{ asset('assets/home/face1.svg') }}" style="height: 140px" class="img-fluid" alt="">
                            <p class="font-28 font-700 text-orange mt-2">Smart Saver Bundle</p>
                            <h5 class="font-48 font-900">Rp 800.000,-</h5>
                            <p class="font-400 font-24">Dari Harga Awal Rp 850.000</p>
                            <ul class="text-start check check-center ps-5 mt-2 mb-4">
                                <li class="font-20 font-500">Minimum pembelian 5 sesi</li>
                                <li class="font-20 font-500">Pembelian Paket B (4-5 orang)</li>
                            </ul>
                            <a class="border-0 rounded-5 bg-orange text-white px-5 py-2 font-36 font-500 w-100 mt-3" href="https://bit.ly/RegistrationTutorService">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="bg-milk rounded-4 text-center py-5 px-4">
                        <img src="{{ asset('assets/home/face3.svg') }}" style="height: 140px" class="img-fluid" alt="">
                        <p class="font-28 font-700 text-red mt-2">Premier Loyalty Package</p>
                        <h5 class="font-48 font-900">Rp 360.000,-</h5>
                        <p class="font-400 font-24">Dari Harga Awal Rp 390.000</p>
                        <ul class="text-start check ps-5 mt-2 mb-4">
                            <li class="font-20 font-500">Telah melakukan pembelian ≥ 5 sesi</li>
                            <li class="font-20 font-500">Pembelian Paket C (6-8 orang)</li>
                        </ul>
                        <a class="border-0 rounded-5 bg-red text-white px-5 py-2 font-36 font-500 w-100 mt-3" href="https://bit.ly/RegistrationTutorService">Book Now</a>
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
            <div class="row gx-5 gy-4">
                @foreach($other_subjects as $tutor)
                <div class="col-12 col-md-4 card-tutor">
                    <a href="{{ URL::route('detailTutor', $tutor->id) }}">
                        <div class="d-flex justify-content-center rounded-3">
                            <h5 class="font-24 font-700 text-black text-center align-self-center justify-content-center" ><span class="font-family font-black bg-white text-center px-2">{{$tutor->subject_title}}</span> </h5>
                            <img src="{{asset('assets/thumbnail/'.$tutor->subject_thumbnail)}}" alt="Person Photo" class="img-tutor img-fluid">
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>



    <!-- FOOTER -->
    <footer class="desktop mt-5">
        <div class="container">
          <div class="box-white d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <img class="img-fluid icon-smile" src="{{asset('assets/home/smile.svg')}}" alt="">
                <a class="box-black font-700 font-44 text-white ml-2 hovered" href="{{ route('soon') }}">Join Mentoring</a>
            </div>
            <div class="p-2" style="text-align: right;">
              <h3 class="font-700 font-40">Ingin mendapatkan ilmu di luar Akademik?</h3>
              <p class="font-400 font-28">Yuk mulai mentoring dengan expert di bidang lomba, karir, dll</p>
            </div>
          </div>
        </div>
    </footer>

    <footer class="mobile">
        <div class="container px-md-5 py-md-2">
          <div class="box-white d-flex flex-column justify-content-center align-items-center">
            <div class="text-center">
              <h3 class="font-400">Ingin mendapatkan ilmu di <span class="font-800">luar Akademik?</span> </h3>
              <p class="font-400">Yuk mulai mentoring dengan expert di bidang lomba, karir, dll</p>
            </div>
            <div>
            </div>
            <div class="mt-1">
                <div class="d-flex align-items-center">
                  <img class="icon-smile" src="{{asset('assets/home/smile.svg')}}" alt="">
                  <a class="box-black font-700 font-44 text-white ml-2" href="{{ route('viewTutors') }}">Join Mentoring</a>
                </div>
              </div>
          </div>
        </div>
        <div>
    </footer>



@endsection
