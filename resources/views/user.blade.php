@extends('layouts.app')

@section('title-block')
    home
@endsection

@section('content')

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="{{ asset('storage/'.Auth::user()->avatar)}}">
                    <span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <form action="{{ route('editProfile') }}">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="first name" id="name" name="name">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="text" class="form-control" placeholder="enter email" id="email" name="email">

                            </div>

                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
