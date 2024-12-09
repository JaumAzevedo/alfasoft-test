@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Create New Item</h1>

    <form action="{{ route('item.store') }}" method="POST" class="bg-white shadow-md p-8 rounded-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold text-gray-700">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold text-gray-700">Description</label>
            <textarea id="description" name="description" rows="4" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>{{ old('description') }}</textarea>
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-semibold text-gray-700">Image URL</label>
            <input type="text" id="image" name="image" value="{{ old('image') }}" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500">
            @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700">Create Item</button>
    </form>
</div>
@endsection