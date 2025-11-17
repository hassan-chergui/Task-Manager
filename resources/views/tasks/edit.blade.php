@extends('layouts.app')
@section('title','Edit')
@section('content')
<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="title">
    <input type="text" name="description" placeholder="description">
    <input type="checkbox" name="is_completed" value="1">
    <input type="submit" value="Confirm">
</form>
@endsection