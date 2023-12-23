@extends('layouts.main')

@push('title')
    <title>Upload Image - WsCube</title>
@endpush

@section('main-section')

<div class="container mx-auto mt-12">
    <h1 class="text-4xl font-bold text-center text-indigo-700 mb-8">Image Upload</h1>

    {{-- Upload Form --}}
    <form action="{{ route('upload.image') }}" method="post" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        @csrf
        <div class="mb-6">
            <label for="image" class="block text-gray-700 text-sm font-semibold mb-2">Choose Image</label>
            <input type="file" name="image" id="image" class="p-3 border rounded w-full focus:outline-none focus:shadow-outline-blue">
            @error('image')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-indigo-500 text-white p-3 rounded hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">
            Upload
        </button>
    </form>
</div>

@endsection
