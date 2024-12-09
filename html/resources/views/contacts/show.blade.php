@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Details</h1>
    <ul>
        <li><strong>ID:</strong> {{ $contact->id }}</li>
        <li><strong>Name:</strong> {{ $contact->name }}</li>
        <li><strong>Contact:</strong> {{ $contact->contact }}</li>
        <li><strong>Email:</strong> {{ $contact->email }}</li>
    </ul>
    <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</div>
@endsection
