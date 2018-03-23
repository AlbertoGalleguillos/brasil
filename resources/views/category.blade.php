@extends('master')

@section('content')
    @foreach ($photos as $photo)
        @if ($loop->index % 3 == 0)
            <div class="row">
        @endif    
        <div class="col s12 m4 valign-wrapper">
                <img class="materialboxed responsive-img z-depth-1" data-caption="{{ $photo->url }}" src="/img/{{ $photo->url }}">
        </div>
        @if ($loop->index % 3 == 2)
            </div>
        @endif
    @endforeach
@endsection