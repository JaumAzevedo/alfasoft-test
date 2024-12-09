@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h1 class="text-3xl font-semibold text-gray-900">{{ $item->name }}</h1>
            <p class="text-gray-700 mt-4">{{ $item->description }}</p>
            <a href="{{ route('item.index') }}" class="mt-6 inline-block bg-gray-600 text-white py-2 px-4 rounded hover:bg-gray-700">Back to All Items</a>
        </div>
    </div>
</div>
@endsection