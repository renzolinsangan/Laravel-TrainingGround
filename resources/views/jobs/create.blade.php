<x-layout>
    <x-slot name="title">Create Job</x-slot> {{-- This is for custom title, the name would rely for the slot variable --}}
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST" id="createJobsForm">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <button type="submit">Submit</button>
    </form>
</x-layout>