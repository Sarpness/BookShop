@extends('layouts.app')

@section('title-block')
    home
@endsection

@section('content')
    <div class="row mb-2">
        @foreach($books as $book)

            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">{{$book->authorFullName}}</strong>
                        <h3 class="mb-0">{{$book->bookTitle}}</h3>
                        <div class="mb-1 text-muted">{{$book->bookPrice}}$</div>
                        <p class="card-text mb-auto">{{$book->bookDescription}}</p>
                        <p class="card-text">Count: {{ $book->bookCount }}</p>
                        <form action="{{ route('deleteBook') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$book->id}}">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" src="{{asset('storage\\'.$book->img)}}" alt="">
                        {{--                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="{{$book->img}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>--}}

                    </div>
                </div>
            </div>

        @endforeach

    </div>
@endsection
