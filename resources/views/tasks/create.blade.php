{{-- @extends('layouts.app')
@section('title','Create')
@section('content')
<form action="{{route('tasks.store')}}" method="POST">
    @csrf
    <label for="title">Title: </label>
    <input type="text" name="title" placeholder="title">
    <label for="description">Description: </label>
    <input type="text" name="description" placeholder="description">
    <label for="is_completed">Completed? </label>
    <input type="checkbox" name="is_completed" value="1">
    <input type="submit" value="Confirm">
</form>
@endsection --}}

@extends('layouts.ap')
@section('title','Create Task')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title mb-4">Create New Task</h3>

                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf

                    <!-- Task Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" 
                               class="form-control" 
                               id="title" 
                               name="title" 
                               placeholder="Enter task title" 
                               value="{{ old('title') }}" 
                               required>
                    </div>

                    <!-- Task Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" 
                                  id="description" 
                                  name="description" 
                                  placeholder="Enter task description" 
                                  rows="3">{{ old('description') }}</textarea>
                    </div>

                    <!-- Completed Checkbox -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" 
                               type="checkbox" 
                               value="1" 
                               id="is_completed" 
                               name="is_completed" 
                               {{ old('is_completed') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_completed">
                            Completed
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    <a href="{{ route('tasks.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
