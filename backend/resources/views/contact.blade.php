{{-- @extends('layouts.app')
@section('title','Contact')
@section('content')
<h3>
    Contact me:
</h3>
    <p>Email: <a href="hassan.chergui95@gmail.com">hassan.chergui95@gmail.com</a></p>
@endsection --}}

@extends('layouts.app')
@section('title','Contact')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title mb-4">Contact Me</h3>
                <p class="mb-2">
                    <strong>Email:</strong>
                    <a href="mailto:hassan.chergui95@gmail.com" class="text-decoration-none">hassan.chergui95@gmail.com</a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
