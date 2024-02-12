@if(!is_null($subjects))
@foreach($subjects as $s)

<div class="col-12 col-md-4 card-tutor">
    <a href="{{ URL::route('detailTutor', $s->id) }}">
        <div class="d-flex justify-content-center rounded-3">
            <h5 class="font-26 font-700 text-black text-center align-self-center justify-content-center" ><span class="font-family font-black bg-white text-center px-2">{{$s->subject_title}}</span> </h5>
            <img src="{{asset('assets/thumbnail/'.$s->subject_thumbnail)}}" alt="Person Photo" class="img-tutor img-fluid">
        </div>
    </a>
</div>


@endforeach
@endif
