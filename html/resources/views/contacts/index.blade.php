@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">All Items</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($items as $item)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-900">{{ $item->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ Str::limit($item->description, 100) }}</p>
                    <a href="{{ route('item.show', $item->id) }}" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection