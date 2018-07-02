@extends('layouts.appp')

@section('content')
  <a class="btn btn-default" href="/index">Go Back</a>
  <h1>{{$todo->title}}</h1>
  <div class="label label-danger">{{$todo->due}}</div>
  <hr>
  <p>{{$todo->body}}</p>
  <br><br>
  <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
  {!! Form::open(['action' => ['ToDosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
@endsection
