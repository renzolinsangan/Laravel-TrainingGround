@extends('layout')

{{-- FOR CUSTOM TITLE --}}
@section('title')
Create Job
@endsection
{{-- FOR CUSTOM TITLE  --}}

@section('content')
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST" id="createJobsForm">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <button type="submit">Submit</button>
    </form>
@endsection