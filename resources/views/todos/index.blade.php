@extends('layouts.app')
@section('content')
<h1>Todos</h1>
@if(count($Todos)>0)
  @foreach($Todos as $todo)
    <div class="well">
        <a href="todos/{{$todo->id}}"><h3>{{$todo->text}}</h3></a>
        <span class="label label-danger">{{$todo->timeleft}}</span>
    </div>
  @endforeach
@endif
@endsection