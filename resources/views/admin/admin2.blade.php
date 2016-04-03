@extends('index')

@section('content')
    {!! csrf_field() !!}
    <div class="row">
        <h1>Панель администратора</h1>
        <div class="col-sm-3">
            <a class="btn btn-primary" href="/admin/1">Перейти к опубликованным</a>
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
                        <div class="col-sm-7">
                            {{$art->body}}
                        </div>
                        <div class="col-sm-2">
                            {{ Form::open(array('action' => array('ArticlesController@update', $art->id ), 'method' => 'put')) }}

                            <button type="submit" class="btn btn-xs btn-primary">Опубликовать</button>
                            {{ Form::close() }}

                            <div style="padding: 3px"></div>

                            {{ Form::open(array('action' => array('ArticlesController@destroy', $art->id ), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-xs btn-danger">Удалить</button>
                            {{ Form::close() }}
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