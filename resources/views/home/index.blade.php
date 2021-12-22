@extends('layouts.default')

@section('page_title', "Homepage Movies")

@section('content')
    <h1>Homepage</h1>

  <div class="container">
    <div class="row row-cols-3 g-4">
      
      @foreach ($movies as $movie)
        <div class="col">
          {{-- movie card --}}
          <div class="card bg-info">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"> <span class="fw-bold">Title:</span> {{$movie['title']}}</li>
              <li class="list-group-item"><span class="fw-bold">Original title:</span> {{$movie['original_title']}}</li>
              <li class="list-group-item"><span class="fw-bold">Nationality:</span> {{$movie['nationality']}}</li>
              <li class="list-group-item"><span class="fw-bold">Release date:</span> {{$movie['date']}}</li>
              <li class="list-group-item"><span class="fw-bold">Vote:</span> {{$movie['vote']}}</li>
            </ul>
          </div>
        </div>
      @endforeach
        
    </div>
  </div>
@endsection