@extends('layouts.main')


@section('content')

<h1>Homepage</h1>
<div class="container cards-wrapper d-flex flex-wrap my3">

    {{-- Card --}}
    @foreach ($movies as $movie)
    <div class="card m-3" style="width: 18rem;">

        {{-- <img src="{{}}" class="card-img-top" alt="{{$movie->title}}"> --}}

        <div class="card-body d-flex flex-column justify-content-between">

            <div class="card-text">
                <h4 class="card-title">{{$movie->title}}</h4>
                <h5 class="card-title">{{$movie->original_title}}</h5>
            </div>

          <a href="#" class="btn btn-primary">Vai al dettaglio</a>

        </div>

    </div>
    @endforeach

    {{-- /Card --}}

</div>

@endsection
