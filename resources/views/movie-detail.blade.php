@extends('layouts.main');


@section('content')

<h1>Dettaglio di: {{$movie->title}}</h1>

{{-- Card --}}
<div class="card movie-card m-3" style="width: 18rem;">

    <img src="#" class="card-img-top" alt="{{$movie->title}}">

    <div class="card-body d-flex flex-column justify-content-between">

        <div class="card-text">
            <h4 class="card-title">{{$movie->title}}</h4>
            <h5 class="card-title">{{$movie->original_title}}</h5>
            <p>
                <ul>
                    <li>Data Pubblicazione: {{$movie->date}}</li>
                </ul>
            </p>
        </div>

      <a href="{{route('home')}}" class="btn btn-primary">Torna indietro</a>

    </div>

</div>
{{-- /Card --}}

@endsection
