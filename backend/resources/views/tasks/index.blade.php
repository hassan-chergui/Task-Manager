{{-- @extends('layouts.app')
@section('title','Tasks')
@section('content')
<h3 class="mb-4">
    Tasks:
</h3>
<ul>
    @foreach ($tasks as $item)
        <li>
            {{ $item->title }}
            <a href="{{route('tasks.edit',$item->id)}}">edit</a>
            <form action="{{route('tasks.destroy',$item->id)}}" method="POST" style="display:inline;>
                @csrf
                @method('DELETE')
                <input type="submit" value="❌">
            </form>
            <p>Description: {{$item->description}}</p>
        </li>
    @endforeach
</ul>
<a href="{{route('tasks.create')}}">Add task</a>
@endsection --}}
@extends('layouts.ap')
@section('title','Tasks')
@section('content')

<h3 class="mb-4">Tasks</h3>

<!-- Add Task Button -->
<a href="{{ route('tasks.create') }}" class="btn btn-success mb-3">+ Add Task</a>

<!-- Tasks List -->
@if($tasks->isEmpty())
    <div class="alert alert-info">No tasks found.</div>
@else
    <div class="row">
        @foreach ($tasks as $item)
            <div class="col-md-6 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <div class="d-flex justify-content-start">
                            <!-- Edit Button -->
                            <a href="{{ route('tasks.edit', $item->id) }}" class="btn btn-primary btn-sm me-2">Edit</a>

                            <!-- Delete Form -->
                            <form action="{{ route('tasks.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

@endsection
    