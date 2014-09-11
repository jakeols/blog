@extends('form_layout')
@section('form')
{{ Form::open(array('route' => 'posts.store')) }}
    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
    {{ Form::textarea('body', null, array('class' => 'form-control', 'placeholder' => 'Body')) }}
    <br>
    {{ Form::submit('Create Post', array('class' => 'btn btn-warning')) }}
    {{ Form::close(); }} 
@stop