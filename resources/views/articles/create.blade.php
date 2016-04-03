@extends('index')

@section('content')
    <h1>Добавить новую Статью</h1>

    @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    {!! Form::open(array('action' => 'ArticlesController@store','method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) !!}
    {!! Form::label('Ваше имя:') !!}
    {!! Form::text('name', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Ваше имя')) !!}
    <label for="message">Ваше сообщение:</label>
    {!! Form::textarea('body', null, array('required', 'class' => 'form-control', 'rows' => '5', 'placeholder'=>'Ваше сообщение')) !!}
    <div></br>
        {!! Form::submit('Отправить',array('class' => 'btn btn-primary submit-button')) !!}
    </div>
    {!! Form::close() !!}
    </br>
@stop