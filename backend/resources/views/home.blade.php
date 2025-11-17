{{-- @extends('layouts.app')
@section('title','Home')
@section('content')
<h3>
    Welcome to this project, feel free to browse around :3
</h3>
@endsection --}}

@extends('layouts.app')
@section('title','Home')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h1 class="card-title mb-3">Welcome!</h1>
                <p class="card-text fs-5">
                    Welcome to Task Manager! Quickly organize, track, and manage your tasks efficiently.
                </p>
                <a href="{{ route('tasks.index') }}" class="btn btn-primary mt-3">View Tasks</a>
            </div>
        </div>
    </div>
</div>

@endsection
