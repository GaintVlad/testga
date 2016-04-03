@extends('index')

@section('content')
    <div class="row">
        <h1>Новая статья</h1>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {{$message}}
        </div>
    </div>
    <div class="col-sm-12" style="padding: 10px">
        <a class="btn btn-primary" href="/articles">К статьям</a>
    </div>
@stop