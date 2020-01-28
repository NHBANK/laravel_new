@extends('layouts.app')

@section('title')
    Tasks
@endsection

@section('content')
    <div class="px-64 mt-4">
        <div class="flex">
            <h1 class="font-bold text-3xl flex-1">Tasks List</h1>
            <a href="/tasks/create">
                <button class="bg-blue-500 hover:bg-blue-600 px-4 py-1 float-right text-white rounded">Create Task</button>
            </a>
        </div>
        <ul>
            @foreach($tasks as $task)
                <a href="/tasks/{{$task->id}}">
                    <li class="border my-3 p-3"> Title : {{$task->title}}  <small class="float-right">Created at {{ $task->created_at}}</small></li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection