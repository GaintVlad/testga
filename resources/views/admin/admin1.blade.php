@extends('index')

@section('content')
    <div class="row">
        <h1>Панель администратора</h1>
    </div>
    <div class="row">
        <hr>
        <div class="col-sm-3">
        <a class="btn btn-primary" href="/admin/2">Перейти к неопубликованным</a>
        </div>
        <div class="col-sm-2 col-sm-offset-7">
        <a class="btn btn-primary" href="/logout">Выход</a>
        </div>

    </div>
    <div class="row">
        <div>
            <hr>
        </div>
        <ul class="list-unstyled">
        <div class="container">
            @foreach ($articles as $art)

                <li>
                    <div class="col-sm-3">
                        {{$art->user->name}}
                    </div>
                    <div class="col-sm-9">
                        {{$art->body}}
                    </div>
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </li>
            @endforeach
        </div>
        <div class="pagination">{{$articles->render()}}</div>

    </ul>
    </div>
@stop