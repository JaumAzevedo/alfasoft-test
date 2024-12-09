@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">All Contacts</h1>
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-4">
        <a href="{{ route('contacts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add New Contact</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($contacts as $contact)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-900">{{ $contact->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ $contact->contact }}</p>
                    <p class="text-gray-600">{{ $contact->email }}</p>
                    <a href="{{ route('contacts.show', $contact->id) }}" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection