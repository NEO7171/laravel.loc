@extends('layouts.layout')
@section('title')@parent:: Send mail
@endsection

@section('header')
    @parent
@endsection
@section('content')
    <div class="container">
        <form method="post" action="/send">
            @csrf
            <div class="form-group">
                <label for="name">Email address</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="text">Ваше сообщение</label>
                <textarea class="form-control" id="text" name="text" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection

