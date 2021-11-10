@extends('layouts.app')

@section('title-block')all messages@endsection

@section('content')
    <h2>all messages</h2>

    @foreach($data as $el)
        <div class="alert alert-info">
            <p>Name:    {{ $el->name }}</p>
            <p>Email:   {{ $el->email }}</p>
            <p>Subject: {{ $el->subject }}</p>
            <p><small>Data: {{$el->created_at}}</small></p>
            <a href="#"><button class="btn btn-warning">Details</button></a>
        </div>
    @endforeach
@endsection


