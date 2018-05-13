@extends('layouts.app')

@section('content')
   <a href="/todos/{{$Todo->id}}"><h1>{{$Todo->text}}</h1></a>
   <a href="/todos/{{$Todo->id}}/edit" class="btn btn-default">Edit</a>
   <div class="label label-danger">{{$Todo->timeleft}}</div>
   <hr>
   <p>{{$Todo->body}}</p>
   <a href="/" class="btn btn-primary">Back</a>
   {{Form::open(['action' => ['todosController@destroy',$Todo->id],'method' => 'POST'])}}
      <div class="form-group">
          {{Form::submit('Delete Todo', ['class' => 'btn btn-danger'])}}
     </div>
     <div class="form-group">
            {{ Form::hidden('_method', 'DELETE') }}
    </div>
  {{Form::close()}}
@endsection