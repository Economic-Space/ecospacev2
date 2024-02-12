@if(!is_null($subjects))
@foreach($subjects as $s)

<div class="col-12 col-md-4 card-tutor">
    <a href="{{ URL::route('detailTutor', $s->id) }}">
        <img src="{{asset('assets/thumbnail/'.$s->subject_image)}}" alt="{{$s->subject_image}}" class="img-fluid w-100 desktop">
        <img src="{{asset('assets/thumbnailMobile/'.$s->subject_image)}}" alt="{{$s->subject_image}}" class="img-fluid w-100 mobile">
    </a>
</div>


@endforeach
@endif
