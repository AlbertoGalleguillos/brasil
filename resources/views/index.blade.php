@extends('master')

@section('content')
    @foreach ($categories as $category)
        @if ($loop->index % 2 == 0)
            <div class="row">
        @endif
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="/img/{{ $category->url }}">
                    <span class="card-title">{{ $category->title }}</span>
                    <a href="/{{ $category->name }}" class="btn-floating halfway-fab waves-effect waves-light red btn-large tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Más"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>{{ $category->description }}</p>
                </div>
            </div>
        </div>
        @if ($loop->index % 2 == 1)
            </div>
        @endif
    @endforeach
@endsection