@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Add New Contact</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="contact" class="block text-gray-700">Contact</label>
            <input type="text" name="contact" id="contact" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-2 border rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Add Contact</button>
    </form>
</div>
@endsection