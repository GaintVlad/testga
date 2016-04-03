@extends('index')

@section('content')
    <h3>Войдите как администратор</h3>

    {!! Form::open(array('url' => '/login','method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) !!}
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email:</label>
        <div class="col-sm-10">
            {!!  Form::email('email', old('email'),
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'email')) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Пароль:</label>
        <div class="col-sm-10">
            {!! Form::password('password', array('required', 'class' => 'form-control', 'placeholder'=>'пароль')) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    {!!Form::checkbox('remember', 'value')!!} Запомнить меня
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('Войти',array('class' => 'btn btn-primary submit-button')) !!}
        </div>
    </div>
    {!! Form::close() !!}


@stop