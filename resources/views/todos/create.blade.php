@extends('layouts.appp')

@section('content')
  <h1>Create Todo</h1>
  {!! Form::open(['action' => 'ToDosController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('title') }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection
