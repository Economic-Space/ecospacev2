@extends('layout.navbar')

@section('content')
    <!-- HEADER -->
    <div id="banner" class="container-fluid position-relative tutor-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h1 class="font-700 font-64 text-center" style="color:white" >ACADEMIC <span class="text-yellow">TUTOR</span> SERVICE</h1>
                    <p class="text-white text-center font-28 font-500">Menyediakan pengajaran individu/kelompok dengan fokus pada bidang akuntansi dan ekonomi yang dilengkapi dengan modul berkualitas tinggi </p>
                </div>
            </div>

        </div>
    </div>

    <!-- FILTER-->

    <div class="container bg-darkblue py-3 px-5 half-up rounded-3 w-mobile-80">
        <div class="row justify-content-center gy-2 gy-lg-0">
            <div class="col-12 col-lg-5">
                <form action="{{route('searchTutor')}}" method="GET">
                    <div class="row gx-2 gy-1 gy-lg-0">
                        <div class="col-9">
                            <input class="w-100 rounded-3 border-0 py-2 px-2 font-20" type="text" name="tutorSearchBar" placeholder="Cari Nama Mata Kuliah" aria-label="Cari Nama Mata Kuliah">
                        </div>
                        <div class="col-3">
                            <button id="search" class="w-100 bg-orange text-white border-0 rounded-3 py-2 px-3 font-20" type="submit" >
                                Cari
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-7">
                <form action="{{route('filterTutor')}}" method="GET">
                    <div class="row gx-2 gy-1 gy-lg-0">
                        <div class="col-6 col-lg-3">
                            <select name="major" id="course" class="rounded-3 border-0 py-2 w-100 font-20">
                                <option value="all" @if(old('major', $major) == 'all') selected @endif>Semua Jurusan</option>
                                <option value="Accounting" @if(old('major', $major) == 'Accounting') selected @endif>Accounting</option>
                                <option value="Management" @if(old('major', $major) == 'Management') selected @endif>Management</option>
                                <option value="Economic" @if(old('major', $major) == 'Economic') selected @endif>Economic</option>
                                <option value="Taxation" @if(old('major', $major) == 'Taxation') selected @endif>Taxation</option>
                            </select>
                        </div>
                        <div class="col-6 col-lg-3">
                            <select name="semester" id="course" class="rounded-3 border-0 py-2 w-100 font-20">
                                <option value="all" @if(old('semester', $semester) == 'all') selected @endif>Semua Semester</option>
                                <option value="Semester 1-2" @if(old('semester', $semester) == 'Semester 1-2') selected @endif>Semester 1-2</option>
                                <option value="Semester 3-4" @if(old('semester', $semester) == 'Semester 3-4') selected @endif>Semester 3-4</option>
                                <option value="Semester 5-6" @if(old('semester', $semester) == 'Semester 5-6') selected @endif>Semester 5-6</option>
                            </select>
                        </div>
                        <div class="col-6 col-lg-3">
                            <button id="pilih" class="bg-orange text-white border-0 rounded-3 py-2 px-xxl-3 w-100 font-20" type="submit" >
                                Pilih
                            </button>
                        </div>
                        <div class="col-6 col-lg-3">
                            <button id="hapus" class="bg-white border-0  rounded-3 py-2 px-xxl-3 w-100 font-20" formaction="{{ route('clearFilters') }}">
                                <i class="fa-solid fa-broom me-1"></i> Hapus Filter
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>


    <!-- LIST TUTORS -->
    <div class="container">
        <div class="row gx-5 gy-4" id="subject-container">
            @include('layout.subjects', ['subjects' => $subjects])
        </div>

        {{-- lazy loading --}}
        <div class="row mt-3 justify-content-center">
            <button class="btn btn-danger hovered rounded-4 lazy-loading" style="width: fit-content">Load more</button>
        </div>
    </div>


    <!-- TUTOR SESSION -->
    <div class="container-fluid bg-milk-mobile">
        <div id="t-session"  class="container mt-5 mb-5">
            <div class="row justify-content-center justify-content-md-start bg-milk rounded-4">
                {{-- gambar joshua --}}
                <div class="col-10 col-md-4 py-4 desktop">
                    <div class="emo1 full-down quarter-right">
                        <img src="{{asset('assets/home/emoji1.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
                    </div>
                    <div class="emo2 full-down quarter-right ">
                        <img src="{{asset('assets/home/emoji2.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
                    </div>
                    <div class="m-5 bg-orange border border-dark mx-auto mb-0" style="height: 180px; width:80% ;border-radius:10px">
                        <img src="{{asset('assets/mentor/joshua2.svg')}}" alt="" class="mx-auto d-block img-fluid" style="max-height: 250px">
                    </div>
                </div>
                {{-- tulisan, ada di mobile jg --}}
                <div class="col-10 col-md-7 py-4">
                    <div>
                        <h1 class="font-black font-42 font-900">Tutor Session </h1>
                        <p class="font-26 font-400">Menyediakan Kebutuhan Belajar Akademikmu | Senantiasa menjaga kualitas pengajar dan memperluas jangkauan jenis mata kuliah.</p>
                    </div>
                    <div class="mt-3">
                        <h3 class="font-26 font-700">Keunggulan Kami:</h3>
                        <div class="d-flex align-items-center">
                            <img style="width:10%; max-width: 50px;" class="me-2" src="{{asset ('assets/home/icon3.svg')}}" alt=""><div class="font-22 font-400">Menyediakan <span class="font-700">Tutor berdasarkan Universitas</span>  agar Relevan <br class="desktop">Ilmu & Pembelajaran sesuai dengan kebutuhan Mahasiswa</div>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <img style="width:10%; max-width: 50px;" class="me-2" src="{{asset ('assets/home/icon3.svg')}}" alt=""><div class="font-22 font-400"> <span class="font-700">Spesialisasi Pengajaran Mata Kuliah</span> pada Bidang Akuntansi, <br class="desktop">Ilmu Ekonomi, Manajemen Bisnis & Keuangan. </div>
                        </div>
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

    {{-- jquery for pagination --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <script>
        // pagination
        $('.lazy-loading').click(function() {
            var currentPage = {{ $subjects->currentPage() }};
            var lastPage = {{ $subjects->lastPage() }};

            if (currentPage >= lastPage) {
                $(this).hide(); // Hide the button if there are no more pages
                return;
            }

            $.ajax({
                url: "{{ route('viewTutors') }}",
                type: "GET",
                data: { page: currentPage + 1 }, // Load next page
                success: function(data) {
                    $('#subject-container').append(data); // Append new subjects
                    currentPage++; // Update current page after successful load

                    if (currentPage >= lastPage) {
                        $('.lazy-loading').hide(); // Hide the button if there are no more pages
                    }
                }
            });
        });

    </script>
@endsection
