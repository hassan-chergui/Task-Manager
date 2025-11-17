{{-- @extends('layouts.app')
@section('title','About')
@section('content')
<h3>
    This is the about page
</h3>
@endsection --}}

@extends('layouts.app')
@section('title','About')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title mb-3">About</h3>
                <p class="card-text">
                    Welcome to my Task Manager application! This web app is built using Laravel and Bootstrap to help you create, view, edit, and manage your tasks efficiently.
                </p>
                <p class="card-text">
                    You can easily track your tasks, organize your day, and stay productive. My goal is to make task management simple and intuitive.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
