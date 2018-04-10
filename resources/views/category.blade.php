@extends('master')

@section('content')
    @foreach ($photos as $photo)
        @if ($loop->index % 3 == 0)
            <div class="row valign-wrapper">
        @endif    
        <div class="col s12 m4">
                <img class="materialboxed responsive-img z-depth-1" data-caption="{{ $photo->url }}" src="/img/{{ $photo->url }}">
        </div>
        @if ($loop->index % 3 == 2)
            </div>
        @endif
    @endforeach
@endsection