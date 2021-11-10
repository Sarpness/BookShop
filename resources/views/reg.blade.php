@extends('layouts.app')

@section('title-block')Регистрация@endsection

@section('content')



{{--        <form action="{{ route('contact-form') }}" method="post" >--}}
        <form>
            @csrf

            <div class="form-group">
                <label for="name">Enter nick</label>
                <input type="text" name="name" placeholder="Your nick" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Enter email</label>
                <input type="text" name="email" placeholder="Your email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Enter password</label>
                <input type="password" name="password" placeholder="Your password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm password</label>
                <input type="confirm_password" name="confirm_password" placeholder="Confirm password" id="confirm_password" class="form-control">
            </div>

            <button type="submit" class="btn btn btn-outline-success">Отправить</button>
        </form>
    </div>

@endsection
