@extends('layout.navbar')

@section('content')
    <!-- HEADER -->
    <div id="banner" class="container-fluid position-relative" style="background: url('assets/background/bg_tutors.svg');background-repeat: no-repeat;background-size: cover;padding-top:100px;padding-bottom:108px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h1 class="font-700 font-64 text-center" style="color:white" >ACADEMIC <span class="text-yellow">TUTOR</span> SERVICE</h1>
                    <p class="text-white text-center font-28 font-500">Menyediakan pengajaran individu/kelompok dengan fokus pada bidang akuntansi dan ekonomi yang dilengkapi dengan modul berkualitas tinggi </p>
                </div>
            </div>

        </div>
    </div>

    <!-- FILTER YG BARU -->

    <div class="container bg-darkblue py-3 px-5 half-up rounded-3 desktop">
        <div class="row">
            <div class="col-12 col-md-5">
                <form action="{{route('searchTutor')}}" method="GET">
                    <div class="d-flex flex-wrap">
                        <input class="flex-grow-1 rounded-3 border-0 py-2 px-2 me-md-3 mt-2 mt-md-0 mb-2 mb-md-0" type="text" name="tutorSearchBar" placeholder="Cari Nama Mata Kuliah" aria-label="Cari Nama Mata Kuliah">
                        <button id="search" class="bg-orange text-white border-0 rounded-3 py-2 px-3 mb-2 mb-md-0" type="submit" >
                            Cari
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-7">
                <form action="{{route('filterTutor')}}" method="GET">
                    <div class="d-flex flex-wrap">
                        <select name="major" id="course" class="flex-grow-1 rounded-3 border-0 py-2 px-3 me-md-3 mb-2 mb-md-0">
                            {{-- dikasih old gini agar saat refresh, pilihan sebelumnya ttp tersimpan --}}
                            <option value="all" @if(old('major', $major) == 'all') selected @endif>Semua Jurusan</option>
                            <option value="Accounting" @if(old('major', $major) == 'Accounting') selected @endif>Accounting</option>
                            <option value="Economics" @if(old('major', $major) == 'Economics') selected @endif>Economics</option>
                            <option value="Taxation" @if(old('major', $major) == 'Taxation') selected @endif>Taxation</option>
                        </select>

                        <select name="semester" id="course" class="flex-grow-1 rounded-3 border-0 py-2 px-3 me-md-3 mb-2 mb-md-0">
                            <option value="all" @if(old('semester', $semester) == 'all') selected @endif>Semua Semester</option>
                            <option value="Semester 1-2" @if(old('semester', $semester) == 'Semester 1-2') selected @endif>Semester 1-2</option>
                            <option value="Semester 3-4" @if(old('semester', $semester) == 'Semester 3-4') selected @endif>Semester 3-4</option>
                            <option value="Semester 5-6" @if(old('semester', $semester) == 'Semester 5-6') selected @endif>Semester 5-6</option>
                        </select>

                        <button id="pilih" class="bg-orange text-white border-0 rounded-3 py-2 px-3 me-md-3 mb-2 mb-md-0" type="submit" >
                            Pilih
                        </button>

                        <button id="hapus" class="bg-white border-0  rounded-3 py-2 px-3 mb-2 mb-md-0" formaction="{{ route('clearFilters') }}">
                            <i class="fa-solid fa-broom me-2"></i> Hapus Filter
                        </button>

                    </div>

                </form>
            </div>
        </div>

    </div>


    <!-- LIST TUTORS -->
    <div class="container">
        <div class="row gx-5 gy-4">
            @if(!is_null($subjects))
            @foreach($subjects as $s)

            <div class="col-12 col-md-4 card-tutor">
                <a href="{{ URL::route('detailTutor', $s->id) }}">
                    <div class="d-flex justify-content-center rounded-3">
                        <h5 class="font-24 font-700 text-black text-center align-self-center justify-content-center" ><span class="font-family font-black bg-white text-center px-2">{{$s->subject_title}}</span> </h5>
                        <img src="{{asset('assets/thumbnail/'.$s->subject_thumbnail)}}" alt="Person Photo" class="img-tutor img-fluid">
                    </div>
                </a>
            </div>


            @endforeach
            @endif
        </div>

        {{-- blm implementasi lazy loading --}}
        {{-- <div class="row col-12 ">
            <div class="d-grid gap-2 col-2 mx-auto px-4 " >
                <button class="btn btn-danger w-auto" style="border-radius: 10px">Load more</button>
            </div>
        </div> --}}
    </div>


    <!-- TUTOR SESSION -->
    <div id="t-session"  class="container mt-5 mb-5 desktop">
        <div class="row justify-content-start bg-milk rounded-4">
            <div class="col-4 py-4">
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
            <div class="col-7 py-4">
                <div>
                    <h1 class="font-black font-40 font-900">Tutor Session </h1>
                    <p class="font-24 font-400">Menyediakan Kebutuhan Belajar Akademikmu | Senantiasa menjaga kualitas pengajar dan memperluas jangkauan jenis mata kuliah.</p>
                </div>
                <div class="mt-3">
                    <h3 class="font-24 font-700">Keunggulan Kami:</h3>
                    <div class="d-flex align-items-center">
                        <img class="icon-smile" style="width:5%" src="{{asset ('assets/home/icon3.svg')}}" alt=""><div class="font-18 font-400">Menyediakan <span class="font-700">Tutor berdasarkan Universitas</span>  agar Relevan <br>Ilmu & Pembelajaran sesuai dengan kebutuhan Mahasiswa</div>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <img class="icon-smile" style="width:5%" src="{{asset ('assets/home/icon3.svg')}}" alt=""><div class="font-18 font-400"> <span class="font-700">Spesialisasi Pengajaran Mata Kuliah</span> pada Bidang Akuntansi, <br>Ilmu Ekonomi, Manajemen Bisnis & Keuangan. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <footer class="desktop">
        <div class="container">
          <div class="box-white d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <img class="img-fluid icon-smile" src="{{asset('assets/home/smile.svg')}}" alt="">
                <a class="box-black font-700 font-42 text-white ml-2 hovered" href="{{ route('soon') }}">Join Mentoring</a>
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
