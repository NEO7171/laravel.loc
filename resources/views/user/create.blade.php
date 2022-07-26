@extends('layouts.layout')
@section('title')@parent:: Registration
@endsection

@section('header')
    @parent
@endsection
@section('content')
    <div class="container">
        <form method="post" action="{{route('register.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" name="name" id="name"
                value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email"  value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
            </div>
            <div class="form-group">
                <label for="avatar">name</label>
                <input type="file" class="form-control-file" name="avatar" id="avatar"
                       value="{{old('avatar')}}">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection

