@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Contact</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" name="contact" class="form-control" id="contact" value="{{ old('contact') }}">
            @error('contact') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
