@extends('layouts.appp')

@section('content')
  <h1>Todos</h1>
  @if(count($todos) > 0)
    @foreach($todos as $todo)
      <div class="well">
        <h3><a href="todo/{{$todo->id}}">{{$todo->title}}</a> <span class="label label-danger">{{$todo->due}}</span><a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>{!! Form::open(['action' => ['ToDosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    
  {!! Form::close() !!}</h3>
      </div>
    @endforeach
  @else
   <script>
      window.alert("The todo list is empty!");
   </script>>
   <h3>Click on create to do to create a new task<h3>
  @endif
@endsection
