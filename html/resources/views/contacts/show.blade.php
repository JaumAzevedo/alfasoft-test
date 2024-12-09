@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Contact Details</h1>
    <div class="bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-xl font-semibold text-gray-900">Name: {{ $contact->name }}</h2>
        <p class="text-gray-600">Contact: {{ $contact->contact }}</p>
        <p class="text-gray-600">Email: {{ $contact->email }}</p>
    </div>
    <div class="mt-4">
        <a href="{{ route('contacts.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded">Back to Contacts</a>
    </div>
</div>
@endsection