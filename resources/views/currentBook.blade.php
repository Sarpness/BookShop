@extends('layouts.app')

@section('title-block')
    Book-{{$book->id}}
@endsection

@section('content')

    <div class="row mb-2">

        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="200" src="{{asset('storage\\'.$book->img)}}" alt="">
            </div>
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">{{$book->authorFullName}}</strong>
                <h3 class="mb-0">{{$book->bookTitle}}</h3>
                <p class="card-text mb-auto">Published: {{$book->pooblishedState}}</p>
                <p class="card-text mb-auto">{{$book->bookDescription}}</p>

                @if($book->bookCount > 0)
                    <h3 class="mb-0"><a href="{{ route('currentBook', $book->id) }}" class="stretched-link">Buy</a></h3>
                @else
                    <h3 class="mb-0"><a class="nav-link disabled">Not available</a></h3>
                @endif
            </div>
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">{{$book->bookPrice}}$</h3>
            </div>

        </div>
    </div>

@endsection
