@extends('layouts.app')

@section('title-block')
    Book-{{$book->id}}
@endsection

@section('content')

    <div class="row mb-2">
        <form class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
              action="{{route('addBook')}}", method="post"
        >
            @csrf
            <input type="hidden" name="id" value="{{$book->id}}">

            <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="200" src="{{asset('storage/'.$book->img)}}" alt="">
            </div>
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">{{$book->authorFullName}}</strong>
                <h3 class="mb-0">{{$book->bookTitle}}</h3>
                <p class="card-text mb-auto">Published: {{$book->pooblishedState}}</p>
                <p class="card-text mb-auto">{{$book->bookDescription}}</p>

                @if($book->bookCount > 0)
                    @if(Route::has('login'))
                        @auth()
                        <div class="col-auto d-none d-lg-block">
                            <div class="col-auto d-none d-lg-block">
                                <input type="number" class="custom-number" value="1" min="1" max="{{$book->bookCount}}" id="count" name="count">
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <button type="submit" class="btn btn-success">Buy</button>
                            </div>
                        </div>
                        @endauth
                    @endif

                @else
                    <h3 class="mb-0"><a class="nav-link disabled">Not available</a></h3>
                @endif
            </div>

            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">{{$book->bookPrice}}$</h3>
            </div>
        </form>
    </div>

@endsection
