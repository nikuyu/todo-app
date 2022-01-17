@extends('layouts.app')

@section('content')
 
    <h1>Task list</h1>

    @foreach($tasks as $task)

    <div class="card @if($task->isCompleted()) border-success  @endif" style="margin-bottom: 20px; ">
    <div class="card-body">
        <p>
         {{ $task->description}}
        </p>
    
    <form action="/tasks/{{ $task->id }}" method="POST">
        @method('PATCH')
        @csrf
        @if(!$task->isCompleted())
        <div class="d-grid gap-2">
    <button class="btn btn-info " input="submit" >Complete</button>
        </div>
        @endif
    </form>
     </div>
    </div>
   

    @endforeach

    <a href="/tasks/create" class = "btn btn-primary d-grid gap-2" >New Task</a>

@endsection