@extends('layouts.main')

@push('title')
    <title>Upload Image - WsCube</title>
@endpush

@section('main-section')

<div class="container mx-auto mt-8">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md mx-auto">
        <h1 class="text-3xl font-bold text-center mb-6 text-blue-500">Image Upload</h1>

        {{-- Upload Form --}}
        <form action="{{ route('upload.image') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Choose Image</label>
                <input type="file" name="image" id="image" class="p-2 border rounded w-full">
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded-full w-full hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Upload
            </button>
        </form>
    </div>
</div>

@endsection
