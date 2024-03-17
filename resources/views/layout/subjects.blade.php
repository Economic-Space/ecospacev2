@if(!is_null($subjects))
    @foreach($subjects as $s)

    <div class="col-12 col-md-4 card-tutor">
        <a href="{{ URL::route('detailTutor', $s->id) }}">
            <div style="background-image: red; display: block; position: relative;">
                {{-- <img  src="{{asset('assets/thumbnail/'.$s->subject_image)}}" alt="{{$s->subject_image}}" class="img-fluid w-100 desktop">
                <img  src="{{asset('assets/thumbnailMobile/'.$s->subject_image)}}" alt="{{$s->subject_image}}" class="img-fluid w-100 mobile"> --}}

                <img src="{{asset('assets/tutorImage/tDesktop.svg')}}" alt="image course" class="w-100 img-fluid desktop" style="position: relative;">
                <img src="{{asset('assets/tutorImage/tMobile.svg')}}" alt="image course" class="w-100 img-fluid mobile" style="position: relative;">

                <h1 style="position: absolute; display: inline; z-index: 1; top: 35%; left: 35px; max-width: 40%; text-align: center" class="font-22 font-700 bg-white p-1">
                    {{$s->subject_title}}
                </h1>


                <img src="{{asset('assets/tutorImage/'.$s->subject_tutor)}}" alt="" style="position: absolute; right: 15px; bottom: 11px; height: 90%; z-index: 1;">

            </div>

        </a>
    </div>
    @endforeach
@else
    <div class="col-12">
        <p class="text-center">No data to display</p>
    </div>
@endif
