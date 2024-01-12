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

    <!-- FILTER YG LAMA -->
    {{-- <div class="container" style="position: relative;">
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
    </div> --}}

    <!-- FILTER YG BARU -->

    <div class="container bg-darkblue py-3 px-5 half-up rounded-3">
        <div class="row">
            <div class="col-12 col-md-5">
                <form action="{{route('searchTutor')}}" method="GET">
                    <div class="d-flex flex-wrap">
                        <input class="flex-grow-1 rounded-3 border-0 py-2 px-2 me-md-3 mt-2 mt-md-0" type="text" name="tutorSearchBar" placeholder="Search by Course Name" aria-label="Search by Course Name">
                        <button id="search" class="bg-orange text-white border-0 rounded-3 py-2 px-3" type="submit" >
                            Search
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-7">
                <form action="{{route('filterTutor')}}" method="GET">
                    <div class="d-flex flex-wrap">
                        <select name="major" id="course" class="flex-grow-1 rounded-3 border-0 py-2 px-3 me-md-3">
                            {{-- dikasih old gini agar saat refresh, pilihan sebelumnya ttp tersimpan --}}
                            <option value="all" @if(old('major', $major) == 'all') selected @endif>All Major</option>
                            <option value="Accounting" @if(old('major', $major) == 'Accounting') selected @endif>Accounting</option>
                            <option value="Economics" @if(old('major', $major) == 'Economics') selected @endif>Economics</option>
                            <option value="Taxation" @if(old('major', $major) == 'Taxation') selected @endif>Taxation</option>
                        </select>

                        <select name="semester" id="course" class="flex-grow-1 rounded-3 border-0 py-2 px-3 me-md-3">
                            <option value="all" @if(old('semester', $semester) == 'all') selected @endif>All Semester</option>
                            <option value="Semester 1-2" @if(old('semester', $semester) == 'Semester 1-2') selected @endif>Semester 1-2</option>
                            <option value="Semester 3-4" @if(old('semester', $semester) == 'Semester 3-4') selected @endif>Semester 3-4</option>
                            <option value="Semester 5-6" @if(old('semester', $semester) == 'Semester 5-6') selected @endif>Semester 5-6</option>
                        </select>

                        <button id="pilih" class="bg-orange text-white border-0 rounded-3 py-2 px-3 me-md-3" type="submit" >
                            Pilih
                        </button>

                        <button id="hapus" class="bg-white border-0  rounded-3 py-2 px-3" formaction="{{ route('clearFilters') }}">
                            <i class="fa-solid fa-broom me-2"></i> Hapus Filter
                        </button>

                    </div>

                </form>
            </div>
        </div>

    </div>


    <!-- LIST TUTORS -->
    <div class="container">
        <div class="card-tutor-container">
            @if(!is_null($subjects))
            @foreach($subjects as $s)

            <div class="card-tutor">
                <a href="{{ URL::route('detailTutor', $s->id) }}">
                    {{-- TODO nanti gambar diganti kalo udah ada --}}
                    <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="Person Photo">
                    <div class="content">
                        <div class="my-5">
                            <h5 class="font-24 text-black "><span class="font-family font-black bg-white text-center">{{$s->subject_title}}</span> </h5>
                            {{-- <h5 class="font-24 text-black "><span class="font-family font-black  bg-white text-center">Accounting</span> </h5> --}}
                        </div>
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
