@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-6 offset-md-3">
    <form action="{{ route('todo.save',['id' => $todo->id])  }}" method="post">
        {{ csrf_field() }}
          <input type="text" class="form-control form-control-lg" name="todo" value="{{$todo->todo}}" />
    </form>
</div>
</div>
{{--  
<hr>
@foreach($todos as $todo)
{{$todo->todo }} <a href="{{ route('todo.delete',['id'=>$todo->id]) }}" class="btn btn-danger">X</a>
 <a href="{{ route('todo.update',['id'=>$todo->id]) }}" class="btn btn-warning btn-xs">Update</a>
<br>
<hr>
@endforeach  --}}
@stop