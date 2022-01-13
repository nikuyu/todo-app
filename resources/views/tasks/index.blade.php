@extends('layouts.app')

@section('content')
 
    <h1>Task list</h1>

    @foreach($tasks as $task)

    <div class="card" style="margin-bottom: 20px; ">
    <div class="card-body">
    <p>{{ $task->description}}</p>
    <a href="#" class="btn btn-info">Complete</a>
     </div>
    </div>
   

    @endforeach

    <a href="/tasks/create" class = "btn btn-primary d-grid gap-2" >New Task</a>

@endsection