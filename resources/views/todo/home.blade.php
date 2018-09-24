@extends('layout.app')

@section('body')
    <br>
    <a href="todo/create" class="btn btn-info"> Add New </a> 
    <div class="col-lg-4 col-lg-offset-4">
        <center><h1>ToDo List </h1> </center>
        <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action active">
            Items list
        </li>
        @foreach ($todos as $todo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $todo->body }}
                <span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
                <!-- <span class="badge badge-primary badge-pill">14</span> -->
            </li>
        @endforeach
        </ul>
    </div>
@endsection