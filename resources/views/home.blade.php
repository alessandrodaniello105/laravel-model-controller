@extends('layouts.main')


@section('content')

<h1>Homepage</h1>
<div class="container cards-wrapper d-flex flex-wrap my3">

    {{-- Card --}}
    @foreach ($movies as $movie)
    <div class="card m-3" style="width: 18rem;">

        {{-- <img src="{{}}" class="card-img-top" alt="{{$movie->title}}"> --}}

        <div class="card-body d-flex flex-column justify-content-between align-items-center">

            <div class="card-text">
                <h4 class="card-title">{{$movie->title}}</h4>
                <h5 class="card-original-title">{{$movie->original_title}}</h5>
                <p class="rate">Voto: {{$movie->vote}} </p>
            </div>

          <a href="{{route('movie_detail', $movie->id)}}" class="btn btn-primary detail-btn">Vai al dettaglio</a>

        </div>

    </div>
    @endforeach

    {{-- /Card --}}

</div>

@endsection
