@extends('layouts.app')

@section('content')
  <h1>Create Todos</h1>
  {{Form::open(['action' => 'todosController@store','method' => 'POST'])}}
      <div class="form-group">
        {{Form::label('text', 'Text')}}
        {{Form::text('text','', ['class' => 'form-control','placeholder' => 'Enter Todo headline'])}}
      </div>

      <div class="form-group">
        {{Form::label('body', 'Todo Body')}}
        {{Form::textarea('body','',['class' => 'form-control','placeholder' => 'Write Todo Body Here..'])}}
      </div>

      <div class="form-group">
          {{Form::label('due', 'Due Date')}}
          {{Form::text('due','', ['class' => 'form-control','placeholder' => 'Enter Due Date'])}}
        </div>

      <div class="form-group">
          {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
     </div>
  {{Form::close()}}
@endsection