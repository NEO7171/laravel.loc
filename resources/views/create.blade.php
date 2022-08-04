@extends('layouts.layout')
@section('title')@parent:: {{$title}}
@endsection

@section('header')
    @parent
@endsection
@section('content')
    <div class="container mt-5">
        <form method="post" action="{{route('posts.store')}}">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <textarea class="form-control" id="content" rows="5" name="content" placeholder="content"></textarea>
            </div>
            <div class="form-group">
                <label for="rubric_id">Rubric</label>
                <select class="form-control" id="rubric_id" name="rubric_id">
                    <option>Select rubric</option>
                    @foreach($rubrics as $k=>$v)
                        <option value="{{$k}}">{{$v}}</option>
                    @endforeach

                </select>
            </div>
            <button class="btn btn-primary" type="submit">Отправить</button>
        </form>
    </div>

@endsection

