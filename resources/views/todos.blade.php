@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-6 offset-md-3">
    <form action="/create/todo" method="post">
        {{ csrf_field() }}
          <input type="text" class="form-control form-control-lg" name="todo" />
    </form>

</div>
</div>

<hr>
@foreach($todos as $todo)
{{$todo->todo }} <a href="{{ route('todo.delete',['id'=>$todo->id]) }}" class="btn btn-danger">X</a>
 <a href="{{ route('todo.update',['id'=>$todo->id]) }}" class="btn btn-warning btn-xs">Update</a>

 @if(!$todo->completed)

 <a href="{{ route('todo.completed',['id'=>$todo->id]) }}" class="btn btn-success btn-xs">Mark As Completed</a>
  @else
  <span class="text-success">Task Completed</span>  
 @endif
 
 <br>
<hr>
@endforeach
@stop