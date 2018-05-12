@extends('layouts.app')

@section('content')
   <a href="Todo/{{$Todo->id}}"><h1>{{$Todo->text}}</h1></a>
   <div class="label label-danger">{{$Todo->timeleft}}</div>
   <hr>
   <p>{{$Todo->body}}</p>
   <a href="/" class="btn btn-primary">Back</a>
@endsection