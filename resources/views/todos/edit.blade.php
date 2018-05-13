@extends('layouts.app')

@section('content')
  <a href="/todos/{{$Todo->id}}" class="btn btn-default">Go Back</a>
  <h1>Edit Todo</h1>
  {{Form::open(['action' => ['todosController@update',$Todo->id],'method' => 'POST'])}}
      <div class="form-group">
        {{Form::label('text', 'Text')}}
        {{Form::text('text',$Todo->text, ['class' => 'form-control'])}}
      </div>

      <div class="form-group">
        {{Form::label('body', 'Todo Body')}}
        {{Form::textarea('body',$Todo->body,['class' => 'form-control'])}}
      </div>

      <div class="form-group">
          {{Form::label('due', 'Due Date')}}
          {{Form::text('due',$Todo->timeleft, ['class' => 'form-control'])}}
      </div>

      <div class="form-group">
            {{ Form::hidden('_method', 'PUT') }}
       </div>

      <div class="form-group">
          {{Form::submit('Edit', ['class' => 'btn btn-primary'])}}
     </div>
  {{Form::close()}}
@endsection