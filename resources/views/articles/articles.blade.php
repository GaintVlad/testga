@extends('index')

@section('content')
    <div class="row">
        <div class="col-sm-9"><h1>Ну очень интересные Статьи</h1></div>
        <div style="padding: 25px" class="col-sm-3"><a class="btn btn-primary btn-xs" href="/admin/1">Админка</a></div>
    </div>
    <div class="row">
        <hr>
    </div>

    <ul class="list-unstyled">
        <div class="container">
            @foreach ($articles as $art)

                <li>
                    <div class="col-sm-3">
                        {{$art->user->name}}<br>
                        {{date('d-M-Y H:i:s', strtotime($art->updated_at))}}
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
        <div class="col-sm-12">
            <hr>
        </div>
        <div class="col-sm-12">
            <a class="btn btn-primary" href="/articles/create">Добавить статью</a>
        </div>

    </ul>
@stop