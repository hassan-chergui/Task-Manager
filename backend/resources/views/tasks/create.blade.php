@extends('layouts.app')
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
@endsection